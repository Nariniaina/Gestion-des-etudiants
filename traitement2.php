<?php
    session_start();
    $id = htmlentities(trim($_POST['numero'])); //enleve tous les caractere speciaux, declaration des variables
    $motif = htmlentities(trim($_POST['motif']));
    $trn_time = date("H:i:s");
    $trn_date = date("Y-m-d");
    $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
    mysqli_select_db($connect,"gestioneleve");  //connexion à la base
    $req="INSERT INTO t_retard(el_id,ret_motif,ret_heure, ret_date) values ('$id','$motif','$trn_time', '$trn_date')";  //requete SQL insertion 
    mysqli_query($connect,$req);
?>
<?php 
header('location:retard.php');?>