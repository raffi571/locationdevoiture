<?php

$idlocation = $_POST["idlocation"];
$idclient = $_POST["idclient"];
$immatriculation = $_POST["immatriculation"];
$cdatedebut = $_POST["datedebut"];
$datefin = $_POST["datefin"];
$daterentree = $_POST["daterentree"];
$assurance = $_POST["assurance"];

require_once ("./bdd/db_connexion.php");

$connexion = new db_connexion();
$connexion_res = $connexion->connexion();
if ($connexion_res){
    if (!empty($idlocation) && !empty($idclient) && !empty($immatriculation) && !empty($cdatedebut) && !empty($datefin) && !empty($daterentree) && !empty($assurance)){
        $values = array();
        array_push($values,$idlocation,$idclient,$immatriculation,$cdatedebut,$datefin,$daterentree,$assurance);
        try {
            $res = $connexion->insert_one("locations",$values);
            echo "Insertion de données: ' " . implode(",", $values) . " '";
        }catch (PDOException $exception){
            echo "ErrorCode: " . $exception;
        }
    }else{
        echo "Les champs obligatoires ne sont pas remplis.!";
    }
}