<?php
        // mysql connection

        require('database/DBController.php');
        require_once('database/product.php');
        require_once('./database/cart.php');
        // instantion of class
        

        $database = new DBController();

        // products

       
        $product = new product($database);
        // $product->getData();

        // cart
        $cart = new cart($database);
        
       

  
        
    ?>