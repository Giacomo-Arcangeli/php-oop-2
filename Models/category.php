<?php
class Category{

    private $name;

    public function __construct($name){
        $this->setName($name);
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name):self{
        $this->name = $name;
        return $this;
    }

}

?>
