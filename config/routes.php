<?php

require_once '../src/Controller/CoffeeController.php';
require_once '../src/Controller/ErrorController.php';


switch ($uri) {
<<<<<<< HEAD
        //Accueil
    case '/':
        $controller = new CoffeeController();
        // Charge la méthode correspondant à la vue souhaitée
        $controller->insert();
        break;
        // Affiche tous les Coffee
    case '/liste':
        $controller = new CoffeeController();
        $controller->liste();
        break;
        // Supprimer un coffee
    case '/delete/coffee':
        $controller = new CoffeeController();
        $controller->delete();
        break;
=======

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


>>>>>>> 28a7d1c08d45c22864ea6a6b2f36db8bae46155c

    case '/edit/coffee':
        $controller = new CoffeeController();
        $controller->edit();
        break;
    default:
        //  echo '<h1>Erreur 404</h1>';
        $controller = new ErrorController();
        $controller->notFound();
}
