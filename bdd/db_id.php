<?php
abstract class db_id{
    private $locahost = "localhost";
    private $db_name = "voiture";
    private $username = "root";
    private $password = "";

    public function get_id(){
        $arr = array();
        array_push($arr,$this->locahost,$this->db_name,$this->username,$this->password);
        return $arr;
    }

}