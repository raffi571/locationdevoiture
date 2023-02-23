<?php
  /*var_dump(phpinfo());*/

?>

<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <title>Page d'accueil</title>
 <link rel="stylesheet" href="./src/style.css"/>
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
     <label>Affichages</label>
     <hr>
     <a href="affichageVoitures.php">Affichages Voitures</a>
     <a href="affichageClients.php">Affichages Clients</a>
     <a href="affichageLocations.php">Affichages Locations</a>
     <hr>
     <label>Formulaires</label>
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
 <h3><marquee behavior="alternate">Bienvenue sur mon site</marquee></h3>
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



