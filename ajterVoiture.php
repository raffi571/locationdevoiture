<?php

    $imm = $_POST["immatriculation"];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $cylindre = $_POST['cylindre'];
    $date = $_POST['dateachat'];

    require_once ("./bdd/db_connexion.php");
    $connexion = new db_connexion();
    $connexion_res = $connexion->connexion();
    if ($connexion_res){
        if (!empty($imm) && !empty($marque) && !empty($modele) && !empty($cylindre) && !empty($date)){

            $values = array();
            array_push($values,$imm,$marque,$modele,$cylindre,$date);
            try {
                $res = $connexion->insert_one("voiture",$values);
                echo "Insertion de données: ' " . implode(",", $values) . " '";
            }catch (PDOException $exception){
                echo "ErrorCode: " . $exception->getCode();
            }

        }else{
            echo "Les champs obligatoires ne sont pas remplis.!";
        }

    }
