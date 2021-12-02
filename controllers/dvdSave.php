<?php

require_once("../init.php");


if($_POST['error'] == 0){
    $dvd = new DVD();
    $dvd->setSKU($_POST['sku']);
    $dvd->setName($_POST['name']);
    $dvd->setPrice($_POST['price']);
    $dvd->setSize($_POST['product_spec']);

    if($dvd->create()){
        echo "1";
    }else{
        echo "0";
    }

}




?>