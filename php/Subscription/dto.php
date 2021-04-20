<?php

require_once('../Config/Dbconnection.php');
include('./model.php');

class SubscriptionDTO{

    private $mysql;

    function __construct() {
        $database = new Database();
        $this->mysql  = $database->db_connect(); 
    }

    public function create($subscription){
        $result = mysqli_query($this->mysql,"Insert into subscription (purchase_date, subscription_expiry_date,Status,renewal_notification, customer_id, service_id)
        values (".$subscription->getPurchaseDate().",".$subscription->getExpiryDate().",".$subscription->getStatus().",".$subscription->getRenewal().",".$subscription->getCustomerId().",".$subscription->getServiceId().")");

        if($result){
            return json_encode(array('status'=>true,'id'=>$id, 'msg'=>' Service Subscribe'));
        }else{
            return json_encode(array('status'=>false,'id'=>$id, 'msg'=>' Service subscription fail.'));
        }
    }

    public function readByCustomerId($customer_id){
        $result = mysqli_query($this->mysql,"select ser.id,ser.name,ser.description,ser.price,ser.sub_name from services ser inner join subscription sub on ser.id = sub.service_id where sub.customer_id='$customer_id'") 
        or die(mysqli_error($this->mysql));

        $rows = array();
    
        while($row = mysqli_fetch_array($result)){
            $rows[]=$row;
        }
        if(count($rows)>0){
            return json_encode(array('status'=>true));
        }else{
            return json_encode(array('status'=>false,'message'=>"You dont have subscription"));
        }
    }

    public function delete($subscription_id){

    }  
}
?>
