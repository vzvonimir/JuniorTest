<?php

class Furniture extends Product {

    protected static $db_table = "furniture";
    protected static $db_table_fields = array( 'SKU', 'name', 'price', 'dimensions');
    protected $dimensions;


    public function getDimensions(){
        return $this->dimensions;
    }

    public function setDimensions($dimensions){
        $this->dimensions = $dimensions;
    }











}








?>