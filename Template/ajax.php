<?php
require_once('functions.php');
require_once('database/product.php');

$product = new product($database);
if(isset($_POST['item_id'])){
    $result = $product->getData($_POST['item_id']);
    echo json_encode($result);

}

?>