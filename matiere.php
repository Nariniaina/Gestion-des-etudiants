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
            <li style="float: left; font-size: 22px;"><a href='accueil.php'> ⃝&nbsp&nbsp&nbsp</a></li>
            <li style="float: left; font-size: 25px;"><a href='gestion.php'> Application</a></li>
        </ul>
    </span>
</body>
<?php
echo "<div><table>
  <tr>
    <th>Numero</th>
    <th>Nom</th>
    <th>Professeur</th>
  </tr>";

$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');
$requete="select * from t_matiere";
        $resultats=$bdd->query($requete);
        $ligne = $resultats->fetch(PDO::FETCH_OBJ) ;
        while($ligne) {
            echo "<tr><td>".$ligne->mat_id."<td>".$ligne->mat_nom."<td>".$ligne -> mat_prof."</td></tr>";
            $ligne = $resultats->fetch(PDO::FETCH_OBJ) ;
                    }
?>
<div>
    <h1><span>Créer une matière </span></h1>
    <form method="post" action="traitement6.php">
    <p><label style="color: black">NOM DE LA MATIERE :</label>  
    <p><input type="text" name="matiere" required></p>
    <p><label style="color: black">PROFESSEUR EN CHARGE :</label>   </p>
    <p><input type="text" name="prof" required></p>
    <p><input type="submit" value="CONFIRMER"></p>
    </form>
</div>
<?php
include("auth.php");
include('conn.php');
$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');

echo "<h1><div><span>Voici la liste de tous les classes :</span></h1>";
echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNombre total :&nbsp"
?>
<?php
include('conn.php');
$query=mysqli_query($conn,"select count(mat_id) as total from `t_matiere`");
$row=mysqli_fetch_array($query);
?>
<?php echo $row['total'],"</div>"; 
?>