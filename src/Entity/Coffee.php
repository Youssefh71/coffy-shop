<?php

/**
 * Les espaces de noms permettent de différencier des classes PHP
 * portant le même nom
 */
namespace Entity;

/**
 * Cette classe représente l'architecture de la table SQL "Coffee"
 */
class Coffee {

    private int $id;
    private string $name;
    private string $description;
    private string $recette;
    private string $image;
    private float $price;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of recette
     */ 
    public function getRecette()
    {
        return $this->recette;
    }

    /**
     * Set the value of recette
     *
     * @return  self
     */ 
    public function setRecette(string $recette)
    {
        $this->recette = $recette;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice(float $price)
    {
        $this->price = $price;

        return $this;
    }
}



    