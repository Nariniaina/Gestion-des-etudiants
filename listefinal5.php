<?php
include("auth.php");

echo "<ul>
        <li><a href='accueil.php'> Accueil</a></li>
        <li><a href='register2.php'> S'inscrire</a></li>
        <li><a href='filtre.php'> Filtrage des élèves </a></li>
        <li><a href='info.php'> Information sur un élèves </a></li>
        <li><a href='listefinal.php'> Listes des élèves </a></li>
    </ul>";

include('conn.php');
$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');

echo "<h1><span>Voici la liste de tous les élèves :</span></h1>";
echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNombre total :&nbsp"
?>
<?php
include('conn.php');
$query=mysqli_query($conn,"select count(el_id) as total from `t_eleve`");
$row=mysqli_fetch_array($query);
?>
<?php echo $row['total']; 
?>
<?php
echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHomme :&nbsp"
?>
<?php
include('conn.php');
$query=mysqli_query($conn,"select count(el_id) as total from `t_eleve` where el_sexe = 'H'");
$row=mysqli_fetch_array($query);
?>
<?php echo $row['total']; 
?>
<?php
echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFemme :&nbsp"
?>
<?php
include('conn.php');
$query=mysqli_query($conn,"select count(el_id) as total from `t_eleve` where el_sexe = 'F'");
$row=mysqli_fetch_array($query);
?>
<?php echo $row['total']; 
?>
<br></br>
<?php

$requete1 = mysqli_query($conn,"select count(el_id) from t_eleve as total");

$row = mysqli_fetch_array($requete1);

while ($row = $requete1->fetch_assoc()) {
    echo $row['classtype']."<br>";
}

echo "<table>
  <tr>
    <th>Numero</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Date de naissance</th>
    <th>Adresse mail</th>
    <th>Sexe</th>
    <th>Annee d'inscription</th>
    <th>Diplome</th>
    <th>Option</th>
    <th>Modification</th>
  </tr>";
  
?>
<link rel="stylesheet" type="text/css" href="style.css">