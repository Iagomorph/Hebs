<?php

class dbManager{
    public $_db;

    function __construct(PDO $db){
        $this->_db = $db;
    }

    public function select($find, $table,$parameters,$condition = ""){

        //Exemple :
        //$parameters = array(':id'=> $idUser)
        //$dbManager->select('email','User','WHERE id = :id',$parameters)

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

        // Exemple :
        // $parameters = array(':email'=> $mailUser, ':mdp' => $mdpUser, ':username' => $username)
        // $dbManager->insert('User(email, mdp, username)','(:email, :mdp, :username)',$parameters)

        $sql = "INSERT INTO " . $table . ' VALUES ' . $values;
        
        $querry = $this->_db->prepare($sql);

        $querry->execute($parameters);

        return true;
    }

    public function update($table, $values, $parameters,  $condition = ""){

        // Exemple :
        // $parameters = array(':id' => $idUser, ':mdp' = 'newMDP' )
        // $dbManager->delete('User','mdp = :mdp','WHERE id = :id', $parameters)

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

        // Exemple :
        // $parameters = array(':id' => $idUser)
        // $dbManager->delete('User','id = :id',$parameters)

        $sql = "DELETE FROM $table WHERE $values";

        $querry = $this->_db->prepare($sql);

        $querry->execute($parameters);

        return true;
    }
}