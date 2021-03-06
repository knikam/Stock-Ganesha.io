<?php

class Customer{

    private $id;
    private $firstName;
    private $lastName;
    private $emailId;
    private $mobileNumber;
    private $dateOfBirth;
    private $phoneNumber;
    private $termAndCondition;

    public function getId(){
       return $this->id;
    }

    public function setId($id){
       $this->id = $id;
    }

    public function getFirstName($firstName){
        return $this->firstName;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function getEmailId(){
        return $this->lastName;
    }

    public function setEmailId($emailId){
        $this->emailId = $emailId;
    }

    public function getMobileNumber(){
        return $this->mobileNumber;
    }

    public function setMobileNumber($mobileNumber){
        $this->mobileNumber = $mobileNumber;
    }

    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getPhoneNumber(){
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber){
        $this->phoneNumber = $phoneNumber;
    }

    public function getTermAndCondition(){
        return $this->termAndCondition;
    }

    public function setTermAndCondition($termAndCondition){
        $this->termAndCondition = $termAndCondition;
    }
}

?>