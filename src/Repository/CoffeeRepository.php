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
        $query = $this->getDb()->prepare('INSERT INTO coffee (name, description, recette, image) VALUES (:name, :description, :recette, :image)');
        $query->bindValue(':name', $coffee->getName());
        $query->bindValue(':description', $coffee->getDescription());
        $query->bindValue(':recette', $coffee->getRecette());
        $query->bindValue(':image', $coffee->getImage());

        return $query->execute();
    }






}
