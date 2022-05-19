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

        case '/liste':
            $controller = new CoffeeController();
            $controller->liste();
            break;

        //Page pour ajouter un café
    case '/add':
        $controller = new CoffeeController();
        // Charge la méthode correspondant à la vue souhaitée
        $controller->insert();
        break;
<<<<<<< HEAD
=======

           
=======
>>>>>>> 3bee6df30bde0115668815e453d72a706690f12e
           

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
