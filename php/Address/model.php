<?php
class Address{
    private $address1;
    private $address2;
    private $city;
    private $state;
    private $zipcode;

    public function getAddress1(){
        return $this->address1;
    }

    public function setAddress1($address1){
        $this->address1 = $address1;
    }

    public function getAddress2(){
        return $this->address2;
    }
    
    public function setAddress2($address2){
        $this->address2 = $address2;
    }

    public function getCity(){
        return $this->city;
    }

    public function setCity($city){
        $this->city = $city;
    }

    public function getState(){
        return $this->state;
    }

    public function setState($state){
        $this->state = $state;
    }

    public function getZipcode(){
        return $this->zipcode;
    }

    public function setZipcode($zipcode){
        $this->zipcode = $zipcode;
    }
}