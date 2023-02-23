<?php

require_once ("db_id.php");

class db_connexion extends db_id {
    private $host;
    private $db_name;
    private $username;
    private $password;

    protected $_connexion;

    public function __construct(){
        $id = $this -> get_id();
        $this->host = $id[0];
        $this->db_name = $id[1];
        $this->username = $id[2];
        $this->password = $id[3];

    }

    public function connexion(){
        $this -> _connexion = null;

        try{
            $this->_connexion = new PDO('mysql:host='.$this->host .';dbname='.$this->db_name,$this->username,$this->password);
            $this->_connexion->exec('set names utf8');
            return true;
        }catch (PDOException $exception){
            echo "Error to connect BDD" . $exception;
            return false;
        }

    }

    public function close_connexion(){
        $this -> _connexion = null;
    }



    public function find_data($table,$l1,$l2){
        $sql = "SELECT * FROM " . $table . " LIMIT " . $l1 . " , " . $l2;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find_client($value){
        $sql = "SELECT * FROM clients WHERE idclient = any(
                SELECT idclient FROM locations WHERE immatriculation = any(
                SELECT immatriculation FROM voiture WHERE marque LIKE '%" . $value ."%' OR modele LIKE '%" . $value . "%'))";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    //

    public function find_car($value){
        $sql = "SELECT * FROM locations WHERE idclient = any(
                SELECT idclient FROM clients WHERE nom LIKE '%" . $value ."%' OR prenom LIKE '%" . $value . "%')";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function total_count_number($id,$table){
        $sql = "SELECT COUNT($id) FROM $table";
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_one($table,$values){
        $columns_table = $this->get_all_columns_from_table($table);
        $names = implode(",",$columns_table);
        $value = "";
        for ($i = 0;$i < sizeof($columns_table);$i++){
            $value = $value . "?;";
        }
        $value = rtrim($value,",");
        $sql = "INSERT INTO $table ($names) VALUES ($value)";
        $query = $this->_connexion->prepare($sql);
        return $query->execute($values);
    }

    public function get_all_columns_from_table($table){
        $sql = "SHOW FULL COLUMNS FROM " . $table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        $res = $query->fetchAll();
        $columns = array();
        foreach ($res as $r => $key){
            foreach ($key as $k => $x){
                if ($k === "Field"){
                    array_push($columns,$key[$k]);
                }
            }

        }
        return $columns;
    }

}
