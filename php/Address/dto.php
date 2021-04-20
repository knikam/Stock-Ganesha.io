<?php

require_once('../Config/Dbconnection.php');
include './model.php';

class AddressDTO{

    private $mysql;

    function __construct() {
        $database = new Database();
        $this->mysql  = $database->db_connect(); 
    }

    public function create($id,$address){

        $address1 = $address->getAddress1();
        $address2 = $address->getAddress2();
        $city = $address->getCity();
        $state = $address->getState();
        $zipcode = $address->getZipcode();

        $result = mysqli_query($this->mysql,"Insert into addresses (address1, address2, city, state, zipcode, customer_id) values ('$address1','$address2','$city','$state','$zipcode','$id')") or die(mysqli_error($this->mysql));

        if($result){
            return json_encode(array('status'=>true,'msg'=>' Address created.'));
        }else{
            return json_encode(array('status'=>false,'msg'=>' Address creation fail.'));
        }
    }

    public function read(){
        $result = mysqli_query($this->mysql,"select * from addresses") or die(mysqli_error($this->mysql));
        $rows = array();
       
        while($row = mysqli_fetch_array($result)){
            $rows[] = $row; 
        }

        return json_encode(array('status'=>true,'data'=>$rows));   
    }

    public function readById($id){
        $result = mysqli_query($this->mysql,"select * from addresses where customer_id='$id'") or die(mysqli_error($this->mysql));
        $rows = array();
       
        while($row = mysqli_fetch_array($result)){
            $rows[] = $row; 
        }

        return json_encode(array('status'=>true,'data'=>$rows));
    }

    public function update($id,$address){
        
    }

    public function delete($id){
        $result = mysqli_query($this->mysql, "delete from addresses where id=".$id) or die(mysqli_error($this->mysql));

        if($result){
            return json_encode(array('status'=>true,'id'=>$id, 'msg'=>' Address deleted.'));
        }else{
            return json_encode(array('status'=>false,'id'=>$id, 'msg'=>' Address deletion fail.'));
        }
    }
}

?>