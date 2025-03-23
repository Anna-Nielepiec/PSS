Stronicowanie w :

Cars.tpl - div ze strzałkami i nr strony (41 - 49 linijka )
Pod strzałkami akcja home z parametrem page 
HomeCtrl.class - Działanie strzałek
-Linijka 33 - pobranie parametru z url,
-Jeżeli nie ma parametru to ustawiamy str. na pierwsza
-Linijka 54 - liczymy ile w bazie jest samochodów, które spełniają warunki wyszukiwania
-Linijka 76, 77 - przekazanie do widoku zmiennych z ilością stron i obecna strona



Ajax w:

home.tpl - w wyszukiwarce - linijka 44
HomeCtr - (83 linijka)
- strona jest pobierana z parametrów funkcji post, a nie z url (86 linijka w HomeCtr )
- nowy plik functions.js
- Dodany div linijka 72 - home.tpl - funkcja  ajaxPostForm z functions.js wrzuca w diva to, co zwraca action_cars (w HomeCtrl)
- dodanie przycisku kasującego wyszukiwanie - home.tpl (linijka 58) na klik wywołuje funkcje resetSearch z functions.js i w parametrze przekazuje akcje cars
- main.tpl linijka 28 - załadowanie skryptu functions.js na stronę 
