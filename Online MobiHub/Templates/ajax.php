<?php
//Require DBController.php for mysqli connection
require ('../Database/DBController.php');

//require product.php class
require ('../Database/product.php');

//DBController object
$db = new DBController();

//product object
$product = new product($db);



if (isset($_POST['item_id'])){
    $result = $product->getProduct($_POST['item_id']);
    echo json_encode($result);
}
