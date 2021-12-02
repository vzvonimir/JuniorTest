<?php

class Furniture extends Product {

    protected static $db_table = "furniture";
    protected static $db_table_fields = array('id', 'SKU', 'name', 'price', 'dimensions');
    protected $dimensions;


    public function getDimensions(){
        return $this->dimensions;
    }

    public function setDimensions($dimensions){
        $this->dimensions = $dimensions;
    }











}








?>