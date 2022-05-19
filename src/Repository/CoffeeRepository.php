<?php

require_once 'Db.php';
require_once __DIR__ .'../../Entity/Coffee.php';

/**
 * Gère le CRUD sur la table "avis"
 */
class CoffeeRepository extends Db {

    /**
     * Insertion dans la table SQL "avis"
     */
    public function add(Entity\Coffee $coffee)
    {
        $query = $this->getDb()->prepare('INSERT INTO coffee (name, description, recette, image, price) VALUES (:name, :description, :recette, :image, :price)');
        $query->bindValue(':name', $coffee->getName());
        $query->bindValue(':description', $coffee->getDescription());
        $query->bindValue(':recette', $coffee->getRecette());
        $query->bindValue(':image', $coffee->getImage());
        $query->bindValue(':price', $coffee->getPrice());

        return $query->execute();
    }

    /**
     * Sélectionne toutes les données de la table SQL "coffee"
     */
    public function selectAll()
    {
        $query = $this->getDb()->query('SELECT * FROM coffee');
        $allCoffee = $query->fetchAll();

        // Boucle sur les données reçues de la requête SQL
        foreach($allCoffee as $coffee) {
            $coffeeObject = new Entity\Coffee();
            $coffeeObject->setId($coffee['id']);
            $coffeeObject->setName($coffee['name']);
            $coffeeObject->setDescription($coffee['description']);
            $coffeeObject->setRecette($coffee['recette']);
            $coffeeObject->setImage($coffee['image']);
            $coffeeObject->setPrice($coffee['price']);
            
            

            // Stock chaque objet avis dans un tableau
            $objects[] = $coffeeObject;
        }

        return $objects ?? [];
    }






}
