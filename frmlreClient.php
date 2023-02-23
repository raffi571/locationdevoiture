<?php

if (isset($_POST['submit'])){
    require_once("ajterClient.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire Client</title>
    <link rel="stylesheet" href="./src/style.css" />
</head>
<body>
<header>
    <div class="header-content">
        <div>
            <h3><a href="index.php" style="color: black;">Voitures</a></h3>
        </div>
        <nav>
            <button id="menu">Menu</button>
        </nav>
    </div>
    <div class="menu-show" id="menu-show">
        <label>Formulaire</label>
        <hr>
        <a href="affichageVoitures.php">Affichage Voiture</a>
        <a href="affichageClients.php">Affichage Clients</a>
        <a href="affichageLocations.php">Affichage Location</a>
        <hr>
        <label>Formulaire</label>
        <hr>
        <a href="formulaireClient.php">Formulaire Client</a>
        <a href="formulaireLocation.php">Formulaire Location</a>
        <a href="formulaireVoiture.php">Formulaire Voiture</a>
        <hr>
        <label>Recherche</label>
        <hr>
        <a href="rechercheClient.php">Recherche Client</a>
        <a href="rechercheVoiture.php">Recherche Voiture</a>
    </div>
</header>
<main>
    <h3>Formulaire Client</h3>
    <form method="post">
        <div class="box-input">
            <label>ID:</label>
            <input type="text" name="id" class="input_insert">
        </div>
        <div class="box-input">
            <label>Nom:</label>
            <input type="text" name="nom" class="input_insert">
        </div>
        <div class="box-input">
            <label>Prénom:</label>
            <input type="text" name="prenom" class="input_insert">
        </div>
        <div class="box-input">
            <label>Code Postal:</label>
            <input type="text" name="codepostal" class="input_insert">
        </div>
        <div class="box-input">
            <label>Localite:</label>
            <input type="text" name="localite" class="input_insert">
        </div>
        <div class="box-input">
            <label>Rue:</label>
            <input type="text" name="rue" class="input_insert">
        </div>
        <div class="box-input">
            <label>Numéro:</label>
            <input type="text" name="numero" class="input_insert" id="num">
        </div>
        <div class="box-input">
            <label>Téléphone:</label>
            <input type="text" name="telephone" class="input_insert" id="tel">
        </div>
        <div class="box-input">
            <label>Email:</label>
            <input type="text" name="email" class="input_insert" id="email">
        </div>
        <input type="submit" id="submit" name="submit" class="button_submit" value="send" onclick="validation()" style="text-align: center;">
    </form>
</main>
</body>
<script>

    window.onload = function (){
        menu_click();
        let submit = document.getElementById("submit");
        submit.type = "";
    }


    email = document.getElementById("email");
    email.addEventListener("change",function (){
        let email = document.getElementById("email");
        email.style.color = "gray";
        check_mail();
    })

    input_num = document.getElementById("tel")
    input_num.style.color = "gray";
    input_num.addEventListener("change",function (){
        let num = document.getElementById("tel")
        num.style.color = "black";
        check_tel();
    })

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

    function validation(){
        let submit = document.getElementById("submit");
        if (check_tel() === true && check_mail() === true){
            submit.type = "submit";
        }else {
            submit.type = "";
        }
    }

    function check_mail(){
        let input_mail = document.getElementById("email");
        input_mail.style.color = "black";
        let text_mail = input_mail.value;
        var format = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
        let res = format.test(text_mail);
        console.log(text_mail)
        console.log(res)
        if (res == false){
            input_mail.style.color = "red";
            return false;
        }else{
            input_mail.style.color = "black";
            return true;
        }
    }

    function check_tel(){
        let input_tel = document.getElementById("tel");
        input_tel.style.color = "black";
        let text_tel = input_tel.value; // récuperer la valeur de input
        var format = /^[0-9][1-9][0-9]+$/;
        let res = format.test(text_tel);
        console.log(res);
        if (res == false){
            input_tel.style.color = "red";
            return false;
        }else{
            // Log c'est pour debuger
            console.log("e")
            input_tel.style.color = "black";
            return true;
        }

    }


</script>
</html>