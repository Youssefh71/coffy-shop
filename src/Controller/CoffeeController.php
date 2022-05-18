<?php

require_once __DIR__ . '../../Repository/CoffeeRepository.php';
require_once __DIR__ . '../../Entity/Coffee.php';

class CoffeeController
{

    /**
     * Formulaire permettant d'ajouter un avis
     * URL d'accès : http://avis.test
     */
    public function insert()
    {
        // Si le formulaire est envoyé, la superglobale $_POST est
        // remplie des données du formulaire
        if (!empty($_POST)) {
            
            // Envoyer les infos du formulaire à la classe Avis
            // Instancier l'entité Avis
            $entity = new Entity\Coffee();
            $entity->setName(htmlspecialchars(strip_tags($_POST['coffee'])));
            $entity->setDescription(htmlspecialchars(strip_tags($_POST['coffee'])));
            $entity->setRecette(htmlspecialchars(strip_tags($_POST['coffee'])));
            


            // Insertion en BDD
            $coffeeRepository = new CoffeeRepository();
            $success = $coffeeRepository->add($entity);
        }

        // La vue correspondant à ce controller
        require_once __DIR__ . '../../../templates/add.php';
    }

   
}


