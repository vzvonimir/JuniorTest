<?php

require_once("../init.php");


if($_POST['error'] == 0){
    $furniture = new Furniture();
    $furniture->setSKU($_POST['sku']);
    $furniture->setName($_POST['name']);
    $furniture->setPrice($_POST['price']);
    $furniture->setDimensions($_POST['product_spec']);

    if($furniture->create()){
        echo "1";
    }else{
        echo "0";
    }

}




?>