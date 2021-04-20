<?php

require('./dto.php');

class CustomerService{

    private $dto;

    function __construct() {
        $this->dto = new CustomerDTO();
    }

    function create($customer){
        return $this->dto->create($customer);
    }

    function read(){
        return $this->dto->read();
    }

    function readById($id){
        return $this->dto->readById($id);
    }

    function update($id, $customer){
        return $this->dto->update($id, $customer);
    }

    function delete($id){
        return $this->dto->delete($id);
    }

    function login($username,$password){
        return $this->dto->login($username,$password);
    }
}

?>