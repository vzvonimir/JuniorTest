<?php


class DVD extends Product {

    protected static $db_table = "dvds";
    protected static $db_table_fields = array('id', 'SKU', 'name', 'price', 'size');
    protected $size;


    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }












}








?>