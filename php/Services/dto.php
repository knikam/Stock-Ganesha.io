<?php
    require_once('../Config/Dbconnection.php');
    include './model.php';

    class ServiceDTO{
        
        private $mysql;

        function __construct() {
            $database = new Database();
            $this->mysql  = $database->db_connect(); 
        }

        public function create($service){
            
            $result = mysqli_query($this->mysql,"Insert into services (id,name,sub_name,description,price) 
            values(".$service->getId().",".$service->getName().",".$service->getSubName().",".$service->getDescription().",".$service->getPrice().")")
            or die(mysqli_error($this->mysql));

            if($result){
                return json_encode(array('status'=>true,'id'=>$id, 'msg'=>' Service created.'));
            }else{
                return json_encode(array('status'=>false,'id'=>$id, 'msg'=>' Service creation fail.'));
            }
        }

        public function read(){

            $result = mysqli_query( $this->mysql, "Select * from services");
            $rows = array();
    
            while($row = mysqli_fetch_array($result)){
                $rows[]=$row;
            }
    
            return json_encode(array('status'=>true,'data'=>$rows));
        }

        public function delete($id){

            $result = mysqli_query($this->mysql, "delete from services where id ='$id'") or die(mysqli_error($this->mysql));
            if($result){
                return json_encode(array('status'=>true,'id'=>$id, 'msg'=>' Service deleted.'));
            }else{
              return json_encode(array('status'=>false,'id'=>$id, 'msg'=>' Service deletion fail.','result'=>$result));
            }
        }
    }
?>