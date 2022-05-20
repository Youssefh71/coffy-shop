<?php

require_once __DIR__ . '../../Repository/CoffeeRepository.php';
require_once __DIR__ . '../../Entity/Coffee.php';

class CoffeeController
{
/**
     * Accés à la page d'acceuil
     * URL d'accès : http://coffy-shop.test/
     */
    public function index()
    {

        require_once __DIR__ . '../../../templates/index.php';
    }

    /**
     * Formulaire permettant d'ajouter un un type de café
     * URL d'accès : http://
     */
   

    public function liste()
    {
        $coffeeRepository = new coffeeRepository();
        $listCoffee = $coffeeRepository->selectAll();

       // var_dump($listCoffee);
        require_once __DIR__ . '../../../templates/list.php';
    }

    /**
     * Formulaire permettant d'ajouter un un type de café
     * URL d'accès : http://coffy-shop.test/
     */

    
    public function article()
    {
        $coffeeRepository = new CoffeeRepository();
        $coffee = $coffeeRepository->selectOne($_GET['id']);

        require_once __DIR__ . '../../../templates/article.php';
    }

   
   
}
