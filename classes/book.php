<?php 

class Book extends Product {

    protected static $db_table = "books";
    protected static $db_table_fields = array('id', 'SKU', 'name', 'price', 'weight');
    protected $weight;


    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }








}








?>