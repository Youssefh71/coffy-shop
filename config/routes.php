<?php

require_once '../src/Controller/CoffeeController.php';
require_once '../src/Controller/ErrorController.php';
require_once '../src/Controller/Admin/AdminController.php';




switch ($uri) {
        //Accueil
    case '/':
        $controller = new CoffeeController();
        // Charge la méthode correspondant à la vue souhaitée
        $controller->index();
        break;

    case '/admin':
        $controller = new AdminController();
        $controller->index();
        break;

    case '/list':
        $controller = new CoffeeController();
        $controller->liste();
        break;

    case '/admin/list':
        $controller = new AdminController();
        $controller->liste();
        break;

        //Page pour ajouter un café
    case '/admin/add':
        $controller = new AdminController();
        // Charge la méthode correspondant à la vue souhaitée
        $controller->insert();
        break;

        // Affiche tous les Coffee
        // case '/liste':
        //     $controller = new CoffeeController();
        //     $controller->liste();
        //     break;
        // Article
    case '/article':
        $controller = new CoffeeController();
        $controller->article();
        break;

        // Supprimer un coffee
    case '/admin/delete':
        $controller = new AdminController();
        $controller->delete();
        break;

    case '/admin/edit':
        $controller = new AdminController();
        $controller->edit();
        break;
    default:
        //  echo '<h1>Erreur 404</h1>';
        $controller = new ErrorController();
        $controller->notFound();
}
