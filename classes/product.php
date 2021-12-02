<?php


abstract class Product extends DBobject{

    protected static $db_table = "";
    protected static $db_table_fields = array();
    protected $id;
    protected $SKU;
    protected $name;
    protected $price;
    
    
    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
		$this->id = $id;
	}

    public function getSKU(){
        return $this->SKU;
    }

    public function setSKU($SKU){
        $this->SKU = $SKU;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

   









}












?>