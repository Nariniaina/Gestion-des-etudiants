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
    <title>Retard</title>
</head>
<body>
    <span>
        <ul style="background-color: MediumSeaGreen; list-style-type: none; overflow: hidden;">
            <li style="float: left; font-size: 22px;"><a href='accueil.php'> ⃝&nbsp&nbsp&nbsp</a></li>
            <li style="float: left; font-size: 25px;"><a href='gestion.php'> Application</a></li>
        </ul>
    </span>
    <div>
        <h1><span>Programmer l'examen</span></h1>
        <form method="post" action="traitement5.php">
        <p><label style="color: black">NUMERO DE L'ELEVE :</label>  
        <p><input type="text" name="numero" required></p>
        <p> <label style="color: black">DATE DE L'EXAMEN :</label>  
        <p><input type="date" name="date" required></p>
        <p><label style="color: black">NUMERO DE LA SALLE D'EXAMEN :</label>
        <p><input type="text" name='numsalle'></p>
        <p><label style="color: black">NUMERO DE LA MATIERE :</label>
        <p><input type="text" name='matiere'></p>
        <p><input type="submit" value="CONFIRMER"></p>
    </div>
</body>
</html>