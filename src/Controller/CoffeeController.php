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
    public function insert()
    {
        // Si le formulaire est envoyé, la superglobale $_POST est
        // remplie des données du formulaire
        if (!empty($_POST)) {

           // var_dump($_POST);
            
            // Envoyer les infos du formulaire à la classe Coffee
            // Instancier l'entité Coffee

           

            $entity = new Entity\Coffee();

            //var_dump($entity);
            $entity->setName(htmlspecialchars(strip_tags($_POST['name'])));
            $entity->setDescription(htmlspecialchars(strip_tags($_POST['description'])));
            $entity->setRecette(htmlspecialchars(strip_tags($_POST['recettes'])));
            $entity->setImage(htmlspecialchars(strip_tags($_POST['image'])));
            $entity->setPrice(htmlspecialchars(strip_tags($_POST['price'])));         
                    


            // Insertion en BDD
            $coffeeRepository = new CoffeeRepository();
            $success = $coffeeRepository->add($entity);
        }

        // La vue correspondant à ce controller
        require_once __DIR__ . '../../../templates/add.php';
    }

<<<<<<< HEAD
    
    
=======
    public function liste()
    {
        $coffeeRepository = new coffeeRepository();
        $listCoffee = $coffeeRepository->selectAll();

        require_once __DIR__ . '../../../templates/liste.php';
    }
    public function delete()
    {
        // var_dump($_GET['id']);

        // Appelle la méthode de suppression dans le repository en lui passant
        // l'ID de l'enregistrement à supprimer
        $coffeeRepository = new CoffeeRepository();
        $success = $coffeeRepository->remove($_GET['id']);

        // Redirige l'utilisateur vers la route "/liste"
        header('Location: /liste?delete=' . $success);
    }
    /**
     * Formulaire permettant d'ajouter un un type de café
     * URL d'accès : http://coffy-shop.test/
     */
    public function display()
    {

        require_once __DIR__ . '../../../templates/liste.php';
    }

   
    public function edit()
    {
        // var_dump($_GET['id']);
        $coffeeRepository = new CoffeeRepository();
        $coffee = $coffeeRepository->selectOne($_GET['id']);

        // Si le formulaire est envoyé
        if (!empty($_POST)) {
            // Ecrase l'ancien contenu de l'objet "Avis" par celui du formulaire
            $coffee->setName(htmlspecialchars(strip_tags($_POST['name'])));
            $coffee->setDescription(htmlspecialchars(strip_tags($_POST['description'])));
            $coffee->setRecette(htmlspecialchars(strip_tags($_POST['recette'])));
            $coffee->setImage(htmlspecialchars(strip_tags($_POST['image'])));
            $coffee->setPrice(htmlspecialchars(strip_tags($_POST['price'])));

            // Transmet cet objet à une méthode du repository pour mise à jour
            $success = $coffeeRepository->update($coffee);

            // Redirige l'utilisateur vers la tableau
            header('Location: /display?edit='. $success);
        }

        require_once __DIR__ .'../../../templates/liste.php';
    }
>>>>>>> 2b95992903c78fb3caf9d0ee8b3f5e4d80dbbfde
}
