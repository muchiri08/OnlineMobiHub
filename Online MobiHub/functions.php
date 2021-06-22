<?php
    //Require DBController.php for mysqli connection
    require ('Database/DBController.php');

    //require product.php class
    require ('Database/product.php');

    //require Cart.php class
    require ('Database/Cart.php');



    //DBController object
    $db = new DBController();

    //product object
    $product = new product($db);
    $product_shuffle = $product->getData();

    //Cart object
    $Cart = new Cart($db);