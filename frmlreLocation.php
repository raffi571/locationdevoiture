<?php

if (isset($_POST['submit'])){
    require_once("ajterLocation.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire Location</title>
    <link rel="stylesheet" href="./src/style.css" />
</head>
<body>
<header>
    <div class="header-content">
        <div>
            <h3><a href="index.php" style="color: black;">Page d'accueil</a></h3>
        </div>
        <nav>
            <button id="menu">Menu</button>
        </nav>
    </div>
    <div class="menu-show" id="menu-show">
        <label>Formulaire</label>
        <hr>
        <a href="affichageVoitures.php">Affichages Voiture</a>
        <a href="affichageClients.php">Affichages Clients</a>
        <a href="affichageLocations.php">Affichages Locations</a>
        <hr>
        <label>Formulaire</label>
        <hr>
        <a href="frmlreClient.php">Formulaires Clients</a>
        <a href="frmlreLocation.php">Formulaires Locations</a>
        <a href="frmlreVoiture.php">Formulaires Voitures</a>
        <hr>
        <label>Recherche</label>
        <hr>
        <a href="rcheClient.php">Recherches Clients</a>
        <a href="rcheVoiture.php">Recherches Voitures</a>
    </div>
</header>
<main>
    <h3>Formulaire de Location</h3>
    <form method="post">
        <div class="box-input">
            <label>ID:</label>
            <input type="text" name="idlocation" class="input_insert">
        </div>
        <div class="box-input">
            <label>Id Client:</label>
            <input type="text" name="idclient" class="input_insert">
        </div>
        <div class="box-input">
            <label>Immatriculation:</label>
            <input type="text" name="immatriculation" class="input_insert">
        </div>
        <div class="box-input">
            <label>Date Debut:</label>
            <input type="datetime-local" name="datedebut" class="input_insert">
        </div>
        <div class="box-input">
            <label>Date Fin:</label>
            <input type="datetime-local" name="datefin" class="input_insert">
        </div>
        <div class="box-input">
            <label>Date Rentree:</label>
            <input type="datetime-local" name="daterentree" class="input_insert">
        </div>
        <div class="box-input">
            <label>Assurance:</label>
            <input type="text" name="assurance" class="input_insert">
        </div>
        <input type="submit" name="submit" class="button_submit">
    </form>
</main>
</body>
<script>

    window.onload = function (){
        menu_click();
    }

    var i = 2;

    function menu_click(){
        let menu_button = document.getElementById("menu");
        let menu_show = document.getElementById("menu-show");
        menu_button.addEventListener("click",function (){
            if(i%2!=0){
                menu_show.style.display = "none";
            }else{
                menu_show.style.display = "flex";
            }
            i++;
        })
    }


</script>
</html>