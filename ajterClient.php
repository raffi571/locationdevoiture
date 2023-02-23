<?php

    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $codepostal = $_POST["codepostal"];
    $localite = $_POST["localite"];
    $rue = $_POST["rue"];
    $numero = $_POST["numero"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];

    require_once ("./bdd/db_connexion.php");

    $connexion = new db_connexion();
    $connexion_res = $connexion->connexion();
    if ($connexion_res){
        if (!empty($id) && !empty($nom) && !empty($prenom) && !empty($codepostal) && !empty($localite) && !empty($rue) && !empty($numero) && !empty($telephone) && !empty($email)){
            $values = array();
            array_push($values,$id,$nom,$prenom,$codepostal,$localite,$rue,$numero,$telephone,$email);
            try {
                $res = $connexion->insert_one("clients",$values);
                echo "Insertion de données: ' " . implode(",", $values) . " '";
            }catch (PDOException $exception){
                echo "ErrorCode: " . $exception->getCode();
            }
        }else{
            echo "Les champs obligatoires ne sont pas remplis.!";
        }
    }