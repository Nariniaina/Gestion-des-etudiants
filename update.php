<?php
    include("auth.php");
	include('conn.php');
	{$id=$_POST['numero'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$ddn=$_POST['dates'];
    $sexe=$_POST['sexe'];
	$adrs=$_POST['email'];
	$dipl=$_POST['diplome'];
	$opt=$_POST['options'];
	mysqli_query($conn,"update `t_eleve` set el_nom='$nom', el_prenom='$prenom', el_ddn='$ddn',el_sexe='$sexe', el_email='$adrs', el_diplome='$dipl', el_option='$opt' where el_id='$id'");
	}
?>
<?php 
header('location:info.php');?>