<?php
ob_start();
//include header.php file
include ('header.php');
?>

<?php
    //include chopping-cart.php
    count($product->getData('cart')) ? include ('Templates/_shopping-cart.php') : include('Templates/notFound/_cart_notFound.php');

    //include chopping-cart.php
    count($product->getData('wishlist')) ? include ('Templates/_wishlist-template.php') : include ('Templates/notFound/_wishlist_notFound.php');

    //include new-phone.php file
    include ('Templates/_new-phones.php');
?>

<?php
//include footer.php file
include ('footer.php');
?>
