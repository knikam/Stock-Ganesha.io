<?php
  header('Access-Control-Allow-Origin: *');

  require('./service.php');
  include_once('./model.php');

  $service = new CustomerService();

  if($_SERVER['REQUEST_METHOD']=="POST"){
    
    switch($_POST['action']){

        case 'login':
            $result = $service->login($_POST['username'],$_POST['password']);
            echo $result;
            break;

        case 'register':
            $decode = json_decode($_POST['customer'],true);
            $customer = new Customer();
            $customer->setFirstName($decode['firstname']);
            $customer->setLastName($decode['lastname']);
            $customer->setEmailId($decode['email']);
            $customer->setPassword($decode['password']);
            $customer->setMobileNumber($decode['mobileno']);
            $customer->setTermAndCondition($decode['termandcondition']);
            $customer->setCreateDate($decode['createdate']);
            $result = $service->create($customer);
            echo $result;          
            break;
            
        case 'update':
            $decode = json_decode($_POST['customer'],true);
            $customer = new Customer();
            $customer->setFirstName($decode['firstname']);
            $customer->setLastName($decode['lastname']);
            $customer->setEmailId($decode['email']);
            $customer->setMobileNumber($decode['mobileno']);
            $customer->setDateOfBirth($decode['dob']);
            $result = $service->update($customer);
            $result;
            break;

      }
  }else{
    switch($_GET['action']){
        case 'read':
            $result = $service->read();
            echo $result;
            break;
        case 'readById':
            $result = $service->readById($_GET['id']);
            echo $result;
            break;
    }
  }
  
?> 