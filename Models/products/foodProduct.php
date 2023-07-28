<?php

require_once __DIR__ . '/product.php';

class FoodProduct extends Product{

    private $ingredients;
    private $expiration;
    public static $type = 'food';

    public function __construct($name , category $category, $ingredients, $expiration){

        parent::__construct($name , $category);

        $this->setIngredients($ingredients);
        $this->setExpiration($expiration);

    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function setIngredients($ingredients):self{
        $this->ingredients = $ingredients;
        return $this;
    }

    public function getExpiration(){
        return $this->expiration;
    }

    public function setExpiration($expiration):self{
        $this->expiration = $expiration;
        return $this;
    }

}