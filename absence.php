<?php
    include("auth.php");
    include('conn.php');
    $req = "select * from t_eleve";
    $rs = mysqli_query($conn,$req) or die(mysqli_error());
    $option = NULL;
    while($row = mysqli_fetch_assoc($rs))
        {
          $option .= '<option value = "'.$row['el_id'].'">'.$row['el_prenom'].'</option>';
        }
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
            <li style="float: left; font-size: 17px"><a href='accueil.php'>←</a></li>
            <li style="float: left; font-size: 17px; "><a href='gestion.php'>⌂</a></li>
            <li style="float: left;"><a href='retardlist.php'> ① Retard</a></li>
            <li style="float: left;"><a href='absencelist.php'> ② Absence</a></li>
            <li style="float: left;"><a href='classelist.php'> ③ Classe</a></li>
            <li style="float: left;"><a href='matierelist.php'> ④ Matiere</a></li>
            <li style="float: left;"><a href='sallelist.php'> ⑤ Salle</a></li>
            <li style="float: left;"><a href='examenlist.php'> ⑦ Examen</a></li>
        </ul>
    </span>
    <div>
        <h1><span>Remplir les informations de l'absence</span></h1>
        <form method="post" action="traitement3.php">
        <p><label style="color: black">PRENOM DE L'ELEVE :</label>  
        <p>
            <select name="numero"> 
                <option value = "<?php while($row = mysqli_fetch_assoc($rs))
            {
              $option .= '<option value = "'.$row['el_id'].'">'.$row['el_prenom'].'</option>';
            }  ?>"><?php echo $option; ?></option>
            </select>
        </p>
        <p> <label style="color: black">MOTIF DE L'ABSENCE :</label>  
        <p><input type="text" name="motif" required></p>
        <p><label style="color: black">DATE DE L'ABSENCE :</label>
        <p><input type="date" name='date'></p>
        <p><input type="submit" value="CONFIRMER"></p>
    </div>
</body>
</html>