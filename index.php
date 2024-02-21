<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableau de voiture</title>
</head>
<body>
    <?php
    session_start();
    // crud
    foreach ($_SESSION['motos'] as $moto){ 
    echo 
        '<div style= "border:solid">
        <h2> '. $moto["model"].' </h2>
        
        <p>' . $moto["vendu"].' </p>
        
        <p> '. $moto["stock"].' </p>
        
        <img src=" '. $moto["image"] .'" alt="" width ="80px" >
        <a href="detail.php?id='.$moto["id"].'">detail</a>
         <a href="supprimer.php?id='.$moto["id"].'">supprimer</a>
         <a href="modifier.php?id='.$moto["id"].'">modifier</a> 
     
        </div>';
     }
     require_once('formulaire.php');
     ?>
</body>
</html>
