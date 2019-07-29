<?php
	include("auth.php");
	$username = htmlentities(trim($_POST['username'])); //enleve tous les caractere speciaux, declaration des variables
	$email = htmlentities(trim($_POST['email']));
	$password = htmlentities(trim($_POST['password']));
	$repeatpassword = htmlentities(trim($_POST['repeatpassword']));
	$trn_date = date("Y-m-d H:i:s");
	if ($password==$repeatpassword) {
		# chiffrage
		$password = md5($password);
		$connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
		mysqli_select_db($connect,"gestioneleve");  //connexion à la base
		$req="INSERT INTO t_login(lo_username,lo_password,lo_email,lo_date) values ('$username','$password','$email','$trn_date')";  //requete SQL insertion 
		mysqli_query($connect,$req);
		header('location:register.php');
	} else echo "les 2 passwords ne sont pas identiques";
?>