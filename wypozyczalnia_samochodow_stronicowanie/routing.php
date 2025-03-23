<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
App::getRouter()->setLoginRoute('logowanie');
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('logowanie', 'LogowanieCtrl');
Utils::addRoute('logout', 'LogowanieCtrl');

Utils::addRoute('home', 'HomeCtrl');
Utils::addRoute('users', 'UsersCtrl',['adm']);


Utils::addRoute('car_details', 'CarDetailsCtrl');
Utils::addRoute('rent', 'CarDetailsCtrl');
Utils::addRoute('wait', 'CarDetailsCtrl');


