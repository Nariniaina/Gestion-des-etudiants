<?php
    session_start();
    $id = htmlentities(trim($_POST['numero'])); //enleve tous les caractere speciaux, declaration des variables
    $motif = htmlentities(trim($_POST['motif']));
    $trn_time = date("H:i:s");
    $trn_date = date("Y-m-d");
    include("conn.php");
    $req="INSERT INTO t_retard(el_id,ret_motif,ret_heure, ret_date) values ('$id','$motif','$trn_time', '$trn_date')";  //requete SQL insertion 
    mysqli_query($conn,$req);
?>
<?php 
header('location:retard.php');?>