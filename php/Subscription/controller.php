<?php
header('Access-Control-Allow-Origin: *');

require('./service.php');
include_once('./model.php');

$service = new SubscriptionService();

if($_SERVER['REQUEST_METHOD']=="POST"){

    switch($_POST['action']){

        case 'create':
            
            break;

        case 'delete':
            echo $service->delete($_POST['id']);
            break;
    }

}else{

    switch($_GET['action']){
        case 'read':
            echo $service->readByCustomerId($_GET['id']);
            break;
    }
    
}