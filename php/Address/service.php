<?php

require('./dto.php');

class AddressService{

    private $dto;

    function __construct() {
       $this->dto = new AddressDTO();
    }

    function create($id,$address){
        return $this->dto->create($id,$address);
    }

    function read(){
        return $this->dto->read();
    }

    function readById($id){
       return $this->dto->readById($id);
    }

    function update($id,$address){
        return $this->dto->update($id,$address);
    }

    function delete($id){
        return $this->dto->delete($id);
    }
}