<?php
    session_start();
    $id = htmlentities(trim($_POST['numero'])); //enleve tous les caractere speciaux, declaration des variables
    $motif = htmlentities(trim($_POST['motif']));
    $trn_date = date("Y-m-d");
    $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
    mysqli_select_db($connect,"gestioneleve");  //connexion à la base
    $req="INSERT INTO t_absence(abs_motif,el_id,abs_date) values ('$motif','$id','$trn_date')";  //requete SQL insertion 
    mysqli_query($connect,$req);
?>
<?php 
header('location:absence.php');?>