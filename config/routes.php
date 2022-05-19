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
<<<<<<< HEAD
        // Affiche tous les Coffee
        case '/liste':
            $controller = new CoffeeController();
            $controller->liste();
            break;
        // Supprimer un coffee
=======
    // Supprimer un coffee
>>>>>>> 23dc250d4b4c9ece85460eb76539130e8c82770f
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
