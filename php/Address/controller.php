<?php

header('Access-Control-Allow-Origin: *');

require('./service.php');
include_once('./model.php');

$service = new AddressService();

if($_SERVER['REQUEST_METHOD']=="POST"){

    switch($_POST['action']){

        case 'create':
            
            break;

        case 'update':

            break;
        case 'delete':
            
            break;
    }

}else{

    switch($_GET['action']){
        case 'read':
            
            break;
        case 'readById':
            echo $service->read($_GET['id']);
            break;
    }   
}