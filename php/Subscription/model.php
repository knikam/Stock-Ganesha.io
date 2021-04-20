<?php

class Subscription{
    private $id;
    private $purchase_date;
    private $expiry_date;
    private $status;
    private $renewal_notification;
    private $customer_id;
    private $service_id;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getPurchaseDate(){
        return $this->purchase_date;
    }

    public function setPurchaseDate($purchase_date){
        $this->purchase_date = $purchase_date;
    }

    public function getExpiryDate(){
        return $this->expiry_date;
    }

    public function setExpiryDate($expiry_date){
        $this->expiry_date = $expiry_date;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getRenewal(){
        return $this->renewal_notification;
    }

    public function setRenewal($renewal_notification){
        $this->renewal_notification = $renewal_notification;
    }

    public function getCustomerId(){
        return $this->customer_id;
    }

    public function setCustomerId($customer_id){
        $this->customer_id = $customer_id;
    }
    
    public function getServiceId(){
        return $this->service_id;
    }

    public function setServiceId($service_id){
        $this->service_id = $service_id;
    }
}
?>