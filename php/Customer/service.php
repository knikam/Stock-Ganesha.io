<?php

include './dto.php';

class CustomerService{

    private $dto;

    function CustomerService(){
        
        $this->dto = new CustomerDTO();
    }

    function create($customer){
        return $this->dto->create($customer);
    }

    function read(){
        return $this->dto->read();
    }

    function update($id, $customer){
        return $this->dto->update($id, $customer);
    }

    function delete($id){
        return $this->dto->delete($id);
    }

}

?>