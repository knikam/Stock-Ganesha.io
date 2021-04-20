<?php

require('./dto.php');

class Service{

    private $dto;

    function __construct() {
        $this->dto = new ServiceDTO();
    }

    public function create($service){
        return $this->dto->create($service);
    }

    public function read(){
        return $this->dto->read();
    }

    public function delete($id){
        return $this->dto->delete($id);
    }
}

?>