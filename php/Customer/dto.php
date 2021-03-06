<?php

include '../Config/Dbconnection.php';
include './model.php';

class CustomerDTO{

    private $mysql = null;

    function CustomerDTO(){ 
        $Dbconnection = new Dbconnection();
        $mysql  = $Dbconnection->dbConnect();
    }
 
    function create($customer){
        $firstName = $customer->getFirstName();
        $lastName = $customer->getLastName();
        $emailId = $customer->getEmailId();
        $mobileNumber = $customer->getMobileNumber();
        $dateOfBirth = $customer->getDateOfBirth();
        $phoneNumber = $customer->getPhoneNumber();
        $termAndCondtion = $customer->getTermAndCondition(); 

       $result =  mysqli_query($this->mysql, "Insert into customers (first_name,last_name,email_id,mobile_number,date_of_birth,phone_number,term_and_condition)
       values('$firstName','$lastName','$emailId','$mobileNumber','$dateOfBirth','$phoneNumber','$termAndCondtion')");
        
       return $result;
    }

    function read(){
        $result = mysqli_query($this->mysql, "Select * from customers");
        return $result;
    }

    function update($id, $customer){
        $result = mysqli_query($this->mysql, "update customers set 
            first_name = ".$customer->getFirstName()."
            last_name = ".$customer->getLastName()."
            email_id = ".$customer->getEmailId()."
            mobile_number = ".$customer->getMobileNumber()."
            date_of_birth = ".$customer->getDateOfBirth()."
            phone_number = ".$customer->getPhoneNumber()."
            term_and_condition = ".$customer->getTermAndCondition()."
            where id = ".$customer->getId());
        
        return $result;
    }

    public function delete($id){
      $result = mysqli_query($this->mysql, "delete from customers where id =".$id);
      return $result;
    }
}