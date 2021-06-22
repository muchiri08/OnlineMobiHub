<?php
    ob_start();

    //include header.php file
    include ('header.php');
?>
<?php
    //include banner-area.php
    include ('Templates/_banner-area.php');

    //include top-sale.php
    include ('Templates/_top-sale.php');

    //include special-price.php
    include ('Templates/_special-price.php');

    //include banner-ads.php file
    include ('Templates/_banner-ads.php');

    //include new-phone.php file
    include ('Templates/_new-phones.php');
?>

<?php
    //include footer.php file
    include ('footer.php');
?>