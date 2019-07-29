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
</body>
<?php
echo "<div><table>
  <tr>
    <th>Numero</th>
    <th>Nom</th>
  </tr>";

$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');
$requete="select * from t_salle";
        $resultats=$bdd->query($requete);
        $ligne = $resultats->fetch(PDO::FETCH_OBJ) ;
        while($ligne) {
            echo "<tr><td>".$ligne->sa_id."<td>".$ligne->sa_nom."</td></tr>";
            $ligne = $resultats->fetch(PDO::FETCH_OBJ) ;
                    }
?>
<div>
    <h1><span>Créer une salle </span></h1>
    <form method="post" action="traitement7.php">
    <p><label style="color: black">NOM DE LA SALLE :</label>  
    <p><input type="text" name="salle" required></p>
    <p><input type="submit" value="CONFIRMER"></p>
    </form>
</div>
<?php
include("auth.php");
include('conn.php');
$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');

echo "<h1><div><span>Voici la liste de tous les salles :</span></h1>";
echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNombre total :&nbsp"
?>
<?php
include('conn.php');
$query=mysqli_query($conn,"select count(sa_id) as total from `t_salle`");
$row=mysqli_fetch_array($query);
?>
<?php echo $row['total'],"</div>"; 
?>