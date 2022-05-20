<?php

require_once 'Db.php';
require_once __DIR__ . '../../Entity/Coffee.php';

/**
 * Gère le CRUD sur la table "avis"
 */
class CoffeeRepository extends Db
{

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

    public function selectAll()
    {
        $query = $this->getDb()->query('SELECT * FROM coffee');
        $allcoffee = $query->fetchAll();
        // Boucle sur les données reçues de la requête SQL
        foreach ($allcoffee as $coffee) {
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
    public function remove(int $id)
    {
        $query = $this->getDb()->prepare('DELETE FROM coffee WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        return $query->execute();
    }

    public function selectOne(int $id)
    {
        $query = $this->getDb()->prepare('SELECT * FROM coffee WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        // Stocker le résultat dans une variable
        $coffee = $query->fetch();

        // Si la variable "$avis" est différente de "false", alors on créer un objet
        // avec l'entité "Avis"
        if ($coffee) {
            $coffeeObject = (new Entity\Coffee())
                ->setId($coffee['id'])
                ->setName($coffee['name'])
                ->setDescription($coffee['description'])
                ->setRecette($coffee['recette'])
                ->setImage($coffee['image'])
                ->setPrice($coffee['price']);
        }
        // On retourne soit l'enregistrement sous forme d'objet ou "false"
        return $coffeeObject ?? false;
    }

    public function update(Entity\Coffee $coffee)
    {
        $query = $this->getDb()->prepare('UPDATE coffee SET name = :name , description = :description , recette = :recette, image = :image, price = :price  WHERE id = :id');
        $query->bindValue(':id', $coffee->getId(), PDO::PARAM_INT);
        $query->bindValue(':name', $coffee->getName());
        $query->bindValue(':description', $coffee->getDescription());
        $query->bindValue(':recette', $coffee->getRecette());
        $query->bindValue(':image', $coffee->getImage());
        $query->bindValue(':price', $coffee->getPrice());
        
        return $query->execute();
    }
}
