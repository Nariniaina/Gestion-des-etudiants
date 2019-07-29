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
    <title>Examen managment</title>
</head>
<body>
    <span>
        <ul style="background-color: MediumSeaGreen; list-style-type: none; overflow: hidden;">
            <li style="float: left; font-size: 17px"><a href='accueil.php'>←</a></li>
            <li style="float: left; font-size: 17px; "><a href='gestion.php'>⌂</a></li>
            <li style="float: left;"><a href='retardlist.php'> ① Retard</a></li>
            <li style="float: left;"><a href='absencelist.php'> ② Absence</a></li>
            <li style="float: left;"><a href='classelist.php'> ③ Classe</a></li>
            <li style="float: left;"><a href='matierelist.php'> ④ Matiere</a></li>
            <li style="float: left;"><a href='sallelist.php'> ⑤ Salle</a></li>
            <li style="float: left;"><a href='tempslist.php'> ⑥ Emploie du temps</a></li>
            <li style="float: left;"><a href='examenlist.php'> ⑦ Examen</a></li>
        </ul>
    </span>
    <div>
        <h1><span>Programmer l'examen</span></h1>
        <form method="post" action="traitement12.php">
        <p> <label style="color: black">DATE DE L'EXAMEN :</label>  
        <p><input type="date" name="date" required></p>
        <p><label style="color: black">NUMERO DE LA SALLE D'EXAMEN :</label>
        <p><input type="text" name='numsalle'></p>
        <p><label style="color: black">NUMERO DE LA MATIERE :</label>
        <p><input type="text" name='matiere'></p>
        <p><input type="submit" value="CONFIRMER"></p>
    </form>
</body>
</html>