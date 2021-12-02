<?php

require_once("../init.php");

$ids_types = $_POST['id_arr'];

if(empty($ids_types)){
   echo 0;
}else{
    foreach($ids_types as $id_type){
        $list = explode(",", $id_type);
        if($list[0] == "dvd"){
            $dvd = DVD::findById(intval($list[1]));
            $dvd->delete();
        }else if($list[0] == "book"){
            $book = Book::findById(intval($list[1]));
            $book->delete();
        }else if($list[0] == "furniture"){
            $furniture = Furniture::findById(intval($list[1]));
            $furniture->delete();
        }
    }
    echo 1;
}








?>