<?php

require_once('../Config/Dbconnection.php');
include './model.php';

class CustomerDTO{

    private $mysql;

    function __construct() {
        $database = new Database();
        $this->mysql  = $database->db_connect(); 
    }
    
    public function create($customer){
        $id = $customer->getFirstName().$customer->getMobileNumber();
        $firstName = $customer->getFirstName();
        $lastName = $customer->getLastName();
        $emailId = $customer->getEmailId();
        $password = password_hash($customer->getPassword(),PASSWORD_DEFAULT); 
        $mobileNumber = $customer->getMobileNumber();
        $phoneNumber = $customer->getPhoneNumber();
        $termAndCondtion = $customer->getTermAndCondition(); 
        $createDate = $customer->getCreatedate();

       $result =  mysqli_query($this->mysql, "Insert into customers (id,first_name,last_name,email_id,password,mobile_number,phone_number,term_and_condition,logged_in,verify_email,create_date)
       values('$id','$firstName','$lastName','$emailId','$password','$mobileNumber','$phoneNumber','$termAndCondtion',false,false,'$createDate')") or die(mysqli_error($this->mysql));
    
       if($result){
        return json_encode(array('status'=>true,'id'=>$id, 'msg'=>' Customer created.'));
       }else{
           return json_encode(array('status'=>false,'id'=>$id, 'msg'=>' Customer creation fail.'));
       }
    }

    public function read(){
        $result = mysqli_query( $this->mysql, "Select * from customers");
        $rows = array();

        while($row = mysqli_fetch_array($result)){
            $rows[]=$row;
        }

        return json_encode(array('status'=>true,'data'=>$rows));
    }

    public function readById($id){
        
        $result = mysqli_query( $this->mysql, "Select * from customers where id='$id'") or die(mysqli_error($this->mysql));
        
        $rows = array();

        while($row = mysqli_fetch_array($result)){
            $rows[]=$row;
        }

        return json_encode(array('status'=>true,'data'=>$rows));
    }

    public function update($id, $customer){
        $result = mysqli_query($this->mysql, "update customers set 
            first_name = ".$customer->getFirstName()."
            last_name = ".$customer->getLastName()."
            email_id = ".$customer->getEmailId()."
            mobile_number = ".$customer->getMobileNumber()."
            date_of_birth = ".$customer->getDateOfBirth()."
            where id = ".$customer->getId());
        
        return $result;
    }

    public function delete($id){
      $result = mysqli_query($this->mysql, "delete from customers where id ='$id'") or die(mysqli_error($this->mysql));
      if($result){
          return json_encode(array('status'=>true,'id'=>$id, 'msg'=>' Customer deleted.'));
      }else{
        return json_encode(array('status'=>false,'id'=>$id, 'msg'=>' Customer deletion fail.','result'=>$result));
      }
    }

    public function login($username,$password){
        $result = mysqli_query($this->mysql, "select id,email_id,password from customers where email_id='$username'") or die(mysqli_error($this->mysql));

        $dec_password;
        $id;

        while($row = mysqli_fetch_array($result)){
            $dec_password = $row['password'];
            $id = $row['id'];
        }

        if(password_verify($password,$dec_password)){
            return json_encode(array('status'=>true,'id'=>$id, 'msg'=>'Login Successful'));
        }else{
            return json_encode(array('status'=>false,'id'=>$id, 'msg'=>'Login Fail.'));
        }
    }
}