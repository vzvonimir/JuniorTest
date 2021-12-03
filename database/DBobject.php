<?php


class DBobject {


    public static function findAll(){

        return static::findByQuery("SELECT * FROM " . static::$db_table . " ");

    }

    public static function checkSKU($sku){
        global $database;
        $count = $database->query("SELECT COUNT(SKU) AS count FROM " . static::$db_table . " WHERE SKU = '" . $sku . "'");
        $data = mysqli_fetch_assoc($count);
        return $data['count'];
    }


    public static function findById($id){
        $result_array = static::findByQuery("SELECT * FROM " . static::$db_table . " WHERE id = $id");

        return !empty($result_array) ? array_shift($result_array) : false;

    }


    public static function findByQuery($sql){
        global $database;
        $result_set = $database->query($sql);

        $the_object_array = array();

        while($row = mysqli_fetch_array($result_set)){
            $the_object_array[] = static::instantiation($row);
        }

        return $the_object_array;
    }


    public static function instantiation($record){
     
        $calling_class = get_called_class();

        $object = new $calling_class;

        foreach($record as $key => $value){
            if($object->hasTheKey($key)){
                $object->$key = $value;
            }
        }

        return $object;
    }


    private function hasTheKey($key){
        $object_properties = get_object_vars($this);
        return array_key_exists($key, $object_properties);
    }


    protected function properties(){

        $properties = array();

        foreach(static::$db_table_fields as $db_field){
            if(property_exists($this, $db_field)){
                $properties[$db_field] = $this->$db_field;
            }
        }

        return $properties;
    }


    protected function cleanProperties(){
        global $database;

        $clean_properties = array();

        foreach($this->properties() as $key => $value){
            $clean_properties[$key] = $database->escapeString($value);
        }

        return $clean_properties;
    }

    
    public function create(){
        global $database;

        $properties = $this->cleanProperties();

        $sql = "INSERT INTO " .static::$db_table . "(" . implode(",", array_keys($properties)) . ")";
        $sql .= "VALUES ('" . implode("','", array_values($properties)) . "')";

        if($database->query($sql)){
            $this->id = $database->insertId();
            return true;
        }else{
            return false;
        }

    }

    public function delete(){
        global $database;
        $sql = "DELETE FROM " .static::$db_table . " ";
        $sql .= "WHERE id=" . $database->escapeString($this->id);

        $database->query($sql);

        return (mysqli_affected_rows($database->connection) == 1) ? true : false;
    }












}










?>