<?php
	include("auth.php");
	$username = htmlentities(trim($_POST['username'])); //enleve tous les caractere speciaux, declaration des variables
	$password = htmlentities(trim($_POST['password']));
	$repeatpassword = htmlentities(trim($_POST['repeatpassword']));
	$trn_date = date("Y-m-d H:i:s");
	if ($password==$repeatpassword) {
		# chiffrage
		$password = md5($password);
		$connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
		mysqli_select_db($connect,"gestion_etudiant");  //connexion à la base
		$req="INSERT INTO login(lo_username,lo_password,lo_date) values ('$username','$password','$trn_date')";  //requete SQL insertion 
		mysqli_query($connect,$req);
	} else echo "les 2 passwords ne sont pas identiques";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<ul>
	<li><a href='accueil.php'> Accueil</a></li>
	<li><a href='register2.php'> S'inscrire</a></li>
	<li><a href='filtre.php'> Filtrage des élèves </a></li>
	<li><a href='info.php'> Information sur un élèves </a></li>
	<li><a href='listefinal.php'> Listes des élèves </a></li>
</ul>
<h1><span style="padding-left: 40px;">Inscrivez vous :</span></h1>
<form method="post" action="register.php">
<div>
	<p><label>Username</label> : </p><p><input type="text" name="username" required></p>
	<p> <label>Password</label> : </p><p><input type="password" name="password" required></p>
	<p> <label>Repeat password</label> : </p><p><input type="password" name="repeatpassword" required></p>
	<p><input type="submit" value="S'incrire"></p>	
</div>

</form>
</body>
</html>