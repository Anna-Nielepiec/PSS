<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;

use app\forms\CarSearchForm;

class HomeCtrl {

    private $form; //dane formularza wyszukiwania

    public function __construct() {
        $this->form = new CarSearchForm();
    }

    public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać
        $this->form->text = ParamUtils::getFromRequest('search_text');

        return !App::getMessages()->isError();
    }
    
    public function action_home() {

        $this->validate();
        $page = ParamUtils::getFromCleanURL(1);
        if (!isset($page))
            $page = 1;
        $offset = ($page - 1) * 3;
        
       // "LIMIT" => [$offset, 3],

        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->text) && strlen($this->form->text) > 0) {
            $search_params['brand[~]'] = $this->form->text . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
            $search_params['model[~]'] = $this->form->text . '%';
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["OR" => &$search_params];
        } else {
            $where = &$search_params;
        }

        $where ["ORDER"] = "brand";
        $cars_count = App::getDB()->count("cars", "*", $where);
        $max_page = ceil($cars_count / 3);
        $where ["LIMIT"] = [$offset, 3];
        
        try {
            $cars = App::getDB()->select("cars", "*", $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

         foreach ($cars as &$car) {
             $car_images = App::getDB()->select("car_images", "imagePath", ["car_id" => $car['id']]);
             $car['main_image'] = !empty($car_images) ? $car_images[0] : "images/rental-1.jpg";
         }

        $loggedUser = SessionUtils::load("login", true);

        App::getSmarty()->assign("login", $loggedUser);
        App::getSmarty()->assign("cars", $cars); 
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign("max_page", $max_page);
        App::getSmarty()->assign("page", $page);

        App::getSmarty()->display("home.tpl");
        
    }
    
}
