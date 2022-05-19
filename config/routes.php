<?php

require_once '../src/Controller/CoffeeController.php';
require_once '../src/Controller/ErrorController.php';


switch ($uri) {
        //Accueil
    case '/':
        $controller = new CoffeeController();
        // Charge la méthode correspondant à la vue souhaitée
        $controller->index();
        break;

        //Page pour ajouter un café
    case '/add':
        $controller = new CoffeeController();
        // Charge la méthode correspondant à la vue souhaitée
        $controller->insert();
        break;
    // Supprimer un coffee
    case '/delete/coffee':
        $controller = new CoffeeController();
        $controller->delete();
        break;

    case '/edit/coffee':
        $controller = new CoffeeController();
        $controller->edit();
        break;
    default:
        //  echo '<h1>Erreur 404</h1>';
        $controller = new ErrorController();
        $controller->notFound();
}
