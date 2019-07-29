<?php
    include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Absence</title>
</head>
<body>
    <span>
        <ul style="background-color: MediumSeaGreen; list-style-type: none; overflow: hidden;">
            <li style="float: left;"><a href='accueil.php'> Accueil</a></li>
            <li style="float: left;"><a href='gestion.php'> Application</a></li>
        </ul>
    </span>
    <div>
        <h1><span>Remplir les informations de l'absence</span></h1>
        <form method="post" action="traitement3.php">
        <p><label style="color: black">NUMERO DE L'ELEVE :</label>  
        <p><input type="text" name="numero" required></p>
        <p> <label style="color: black">MOTIF DE L'ABSENCE :</label>  
        <p><input type="text" name="motif" required></p>
        <p><label style="color: black">DATE DE L'ABSENCE :</label>
        <p><input type="date" name='date'></p>
        <p><input type="submit" value="CONFIRMER"></p>
    </div>
</body>
</html>