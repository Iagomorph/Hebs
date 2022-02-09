<?php

class dbManager{
    public $_db;

    function __construct(PDO $db){
        $this->_db = $db;
    }

    public function select($find, $table, $condition = "",$parameters){
        if($condition == ""){
            $sql = "SELECT $find FROM $table";
        }
        else{
            $sql = "SELECT $find FROM $table $condition";
        };

        $querry = $this->_db->prepare($sql);
        
        $querry->execute($parameters);

        $data = $querry->fetchAll(PDO::FETCH_ASSOC);

        return $data;

    }

    public function insert($table,$values,$parameters){
        $sql = "INSERT INTO $table VALUES $values";
        
        $querry = $this->_db->prepare($sql);

        $querry->execute($parameters);

        return true;
    }

    public function update($table, $values, $condition = "", $parameters){
        if($condition == ""){
            $sql = "UPDATE $table SET $values";
        }else{
            $sql = "UPDATE $table SET $values $condition";
        };

        $querry = $this->_db->prepare($sql);

        $querry->execute($parameters);

        return true;
    }

    public function delete($table,$values,$parameters){
        $sql = "DELETE FROM $table WHERE $values";

        $querry = $this->_db->prepare($sql);

        $querry->execute($parameters);

        return true;
    }
}