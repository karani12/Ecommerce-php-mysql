<?php

     class DBController
     {
        //  Database connection properties
        protected $host = "localhost";
        protected $user = "root";
        protected $pass =  "";
        protected $db   =  "shopping";


        // connection
        public $conn  = null;

        // initialize

        public function __construct()
        {
            $this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);

            if ($this->conn->connect_error) {

                echo "fail to connect".$this->conn->connect_error;
                # code...
            }
            
        }

        public function __destruct()
        {
        $this->closeConnection();
        }

        // closing  connection
        protected function closeConnection(){
            if($this->conn = null){
                $this->conn->close();
                $this->conn = null;
            }
        }

     }
     

?>