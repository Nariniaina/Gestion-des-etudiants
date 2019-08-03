<?php
    include("auth.php");
    include('conn.php');
    $req = "select * from t_salle";
    $rs = mysqli_query($conn,$req) or die(mysqli_error());
    $option = NULL;
    while($row = mysqli_fetch_assoc($rs))
        {
          $option .= '<option value = "'.$row['sa_id'].'">'.$row['sa_nom'].'</option>';
        }
    $req1 = "select * from t_matiere";
    $rs1 = mysqli_query($conn,$req1) or die(mysqli_error());
    $option1 = NULL;
    while($row1 = mysqli_fetch_assoc($rs1))
        {
          $option1 .= '<option value = "'.$row1['mat_id'].'">'.$row1['mat_nom'].'</option>';
        }
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
            <li style="float: left;"><a href='examenlist.php'> ⑦ Examen</a></li>
        </ul>
    </span>
    <div>
        <h1><span>Programmer l'examen</span></h1>
        <form method="post" action="traitement5.php">
        <p> <label style="color: black">DATE DE L'EXAMEN :</label>  
        <p><input type="date" name="date" required></p>
        <p><label style="color: black">NOM DE LA SALLE D'EXAMEN :</label>
        <p>
            <select name="numsalle"> 
                <option value = "<?php while($row = mysqli_fetch_assoc($rs))
            {
              $option .= '<option value = "'.$row['sa_id'].'">'.$row['sa_nom'].'</option>';
            }  ?>"><?php echo $option; ?></option>
            </select>
        </p>
        <p><label style="color: black">NOM DE LA MATIERE :</label>
        <p>
            <select name="matiere"> 
                <option value = "<?php while($row1 = mysqli_fetch_assoc($rs1))
            {
              $option1 .= '<option value = "'.$row1['mat_id'].'">'.$row1['mat_nom'].'</option>';
            }  ?>"><?php echo $option1; ?></option>
            </select>
        </p>
        <p><input type="submit" value="CONFIRMER"></p>
    </form>
</body>
</html>