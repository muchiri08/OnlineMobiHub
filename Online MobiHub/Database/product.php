<?php
//use to fetch products from the db
class product{
    public $db = null;

    public function __construct(DBController $db){
        if (!isset($db->conn))
            return null;
        $this->db=$db;
    }

    //fetch product data using getData method
     public  function getData($table = 'products'){
       $result =  $this->db->conn->query("SELECT * FROM {$table}");

       $resultArray = array();

       while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           $resultArray[] = $item;
       }
       return $resultArray;
     }

     //getting products using item_id
    public function getProduct($item_id = null, $table = 'products'){
        if (isset($item_id)){
            $result = $this->db->conn->query("SELECT * FROM {$table} WHERE item_id = {$item_id}");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }
}
