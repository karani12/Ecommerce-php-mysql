<?php

     class product{
         public $data =  null;

         public function __construct (DBController $data)
         
             
         {
             if(!isset($data->conn)) return null;
             $this->data = $data;

         }

        //  fetch products
        public function getData($table = "product"){
        $result=$this->data->conn->query("SELECT * FROM {$table}");

        $resultArray = array();

        while($item=mysqli_fetch_all($result,MYSQLI_ASSOC)){
            $resultArray = $item;

        }
        return $resultArray;
        }
        
        //  get product using item id
        public function getProduct($item_id = null,$table = 'product')
        {
            
            if (isset($item_id)){
            $sql = "SELECT * FROM {$table} WHERE item_id = {$item_id}";
            $result=$this->data->conn->query($sql);
            $resultArray = array();

            while($item=mysqli_fetch_all($result,MYSQLI_ASSOC)){
                $resultArray = $item;
    
            }
            return $resultArray;



            }
      
        }
        
     }

?>