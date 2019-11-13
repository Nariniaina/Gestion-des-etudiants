<?php
include("auth.php");

echo "<ul>
        <li><a href='accueil.php'> Accueil</a></li>
        <li><a href='register.php'> S'inscrire</a></li>
        <li><a href='filtre.php'> Filtrage des élèves </a></li>
        <li><a href='listefinal.php'> Listes des élèves </a></li>
    </ul>";

include('conn.php');
$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');

echo "<h1><span>&nbsp&nbspVoici la liste de tous les élèves :</span></h1>";
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
?>
<?php 
     require_once("conn.php");
    $mc = "NULL";
    if (isset($_POST['motcle'])) {
        $mc = $_POST['motcle'];
     }
     $req = "select * from t_eleve where el_prenom like '%$mc%'";
     $rs = mysqli_query($conn,$req) or die(mysqli_error());
 ?>
<html>
 <body>
    <form method="POST" action="chercheretudiant.php">
        <div>
            Mot clé :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="motcle" placeholder="Prenom"><p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="chercher"></p>
        </div>
    </form>
    <table>
        <tr>
            <th>Numero</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de anissance</th>
            <th>Sexe</th>
            <th>Année d'inscription</th>
            <th>Email</th>
            <th>Diplome</th>
            <th>Option</th>
            <th>Modification</th>
        </tr>
        <?php  while ($etudiant = mysqli_fetch_assoc($rs))  {  ?>
        <tr>
            <td><?php echo ($etudiant['el_id']); ?></td>
            <td><?php echo ($etudiant['el_nom']); ?></td>
            <td><?php echo ($etudiant['el_prenom']); ?></td>
            <td><?php echo ($etudiant['el_ddn']); ?></td>
            <td><?php echo ($etudiant['el_sexe']); ?></td>
            <td><?php echo ($etudiant['el_inscription']); ?></td>
            <td><?php echo ($etudiant['el_email']); ?></td>
            <td><?php echo ($etudiant['el_diplome']); ?></td>
            <td><?php echo ($etudiant['el_option']); ?></td>
            <td><span><a href="info.php?code=<?php echo ($etudiant['el_id']); ?>">Editer</a></span></td>
        </tr>
        <?php } ?>
    </table>
 </body>
 </html>

<link rel="stylesheet" type="text/css" href="style.css">