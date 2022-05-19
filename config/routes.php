<?php

require_once '../src/Controller/CoffeeController.php';
require_once '../src/Controller/ErrorController.php';


switch ($uri) {

        //Page d'acceuil (index.php)
    case '/':
        $controller = new CoffeeController();
        // Charge la méthode correspondant à la vue souhaitée
        $controller->display();
        break;


        //Page ajouter à la BDD (add.php)
    case '/add':
        $controller = new CoffeeController();
        // Charge la méthode correspondant à la vue souhaitée
        $controller->insert();
        break;


    // Modifie un coffee
    case '/liste':
        $controller = new CoffeeController();
        $controller->list();
        break;





    default:
        //  echo '<h1>Erreur 404</h1>';
        $controller = new ErrorController();
        $controller->notFound();
}
