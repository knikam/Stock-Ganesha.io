<?php

class ServiceClass{

    private $id;
    private $name;
    private $sub_name;
    private $description;
    private $price;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getSubName(){
        return $this->sub_name;
    }

    public function setSubName($sub_name){
        $this->sub_name = $sub_name;
    }

    
    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }
    
    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }
}
?>