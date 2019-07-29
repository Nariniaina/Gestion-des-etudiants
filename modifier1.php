<?php 
	require_once("conn.php");
	$id = $_POST['numero'];
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$dates = htmlspecialchars($_POST['dates']);
	$sexe = htmlspecialchars($_POST['sexe']);
	$email = htmlspecialchars($_POST['email']);
	$dip = htmlspecialchars($_POST['diplome']);
	$option = htmlspecialchars($_POST['options']);

	$req = "update t_eleve set el_nom = '$nom', el_prenom = '$prenom', el_ddn = '$dates', el_sexe = '$sexe', el_email ='$email', el_diplome = '$dip', el_option = '$option' where el_id=$id";
	mysqli_query($conn,$req) or die(mysqli_error());	
	header("location: afficheall.php");
?>