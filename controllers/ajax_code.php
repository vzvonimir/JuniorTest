<?php

require_once("../init.php");

if(isset($_POST['SKU'])){
    $count = DVD::checkSKU($_POST['SKU']);
    $count += Furniture::checkSKU($_POST['SKU']);
    $count += Book::checkSKU($_POST['SKU']);
    echo $count;
    
}





?>