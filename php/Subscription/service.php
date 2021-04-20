<?php

    require('./dto.php');

    class SubscriptionService{

        private $dto;

        function __construct(){
            $this->dto = new SubscriptionDTO();
        }

        public function create($subscription){
           $this->dto->create($subscription);
        }
    
        public function readByCustomerId($customer_id){
            $this->dto->readByCustomerId($customer_id);
        }
    
        public function delete($subscription_id){
            $this->dto->delete($subscription_id);
        }  
    }

?>