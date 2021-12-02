<?php

require_once("../init.php");


if($_POST['error'] == 0){
    $book = new Book();
    $book->setSKU($_POST['sku']);
    $book->setName($_POST['name']);
    $book->setPrice($_POST['price']);
    $book->setWeight($_POST['product_spec']);

    if($book->create()){
        echo "1";
    }else{
        echo "0";
    }

}




?>