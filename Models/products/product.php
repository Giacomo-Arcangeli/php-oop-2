<?php

require_once __DIR__ . '/../category.php';

class Product{

    private $name;
    private $category;

    public function __construct($name , category $category){

        $this->setName($name);
        $this->setCategory($category);
    }


    public function getName(){
        return $this->name;
    }

    public function setName($name):self{
        $this->name = $name;
        return $this;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory(Category $category):self{
        if ($category instanceof Category) $this->category = $category;
        return $this;
    }


}