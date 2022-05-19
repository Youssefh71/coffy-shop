<?php

require_once '../src/Controller/CoffeeController.php';
require_once '../src/Controller/ErrorController.php';


switch ($uri) {

        //Accueil
    case '/':
        $controller = new CoffeeController();
        // Charge la méthode correspondant à la vue souhaitée
        $controller->display();
        break;


        //Accueil
    case '/add':
        $controller = new CoffeeController();
        // Charge la méthode correspondant à la vue souhaitée
        $controller->insert();
        break;



    default:
        //  echo '<h1>Erreur 404</h1>';
        $controller = new ErrorController();
        $controller->notFound();
}
