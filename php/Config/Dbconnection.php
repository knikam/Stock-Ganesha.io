<?php
class Database{
   const DB_HOSTNAME = 'localhost';
   const DB_USERNAME = 'root';
   const DB_PASSWORD = 'root';
   const DB_NAME = 'stockganesha';
   public $_db_connect;
   protected $_sql;
   protected $_result;
   protected $_row;

   function db_connect(){
     $this->_db_connect = mysqli_connect(self::DB_HOSTNAME,self::DB_USERNAME,self::DB_PASSWORD,self::DB_NAME) or die(mysql_error());
     return $this->_db_connect;
   }

   function sql(){
       $this->_sql = 'SELECT * FROM customers';
   }

   function query(){
       $this->_result = mysqli_query($this->_db_connect,$this->_sql);
   }

   function fetch_array(){
       while($this->_row = mysqli_fetch_array($this->_result)){
           $username = $this->_row['first_name'];

           echo "<ul>";
               echo "<li>".$username."</li>";
           echo "</ul>";
       }
   }

   function db_close(){
       mysqli_close($this->_db_connect);
   }
}