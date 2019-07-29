<?php
    session_start();
    $nom = htmlentities(trim($_POST['nomclasse'])); //enleve tous les caractere speciaux, declaration des variables
    $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
    mysqli_select_db($connect,"gestioneleve");  //connexion à la base
    $req="INSERT INTO t_classe(cla_nom) values ('$nom')";  //requete SQL insertion 
    mysqli_query($connect,$req);
?>
<?php 
header('location:classe.php');?>