<?php

require_once __DIR__ . '/product.php';

class ToyProduct extends Product{

    private $colors;
    private $materials;
    public static $type = 'toy';

    public function __construct($name , category $category, $colors, $materials){

        parent::__construct($name , $category);

        $this->setColors($colors);
        $this->setMaterials($materials);
        

    }

    public function getColors(){
        return $this->colors;
    }

    public function setColors($colors):self{
        $this->colors = $colors;
        return $this;
    }

    public function getMaterials(){
        return $this->materials;
    }

    public function setMaterials($materials):self{
        $this->materials = $materials;
        return $this;
    }

}