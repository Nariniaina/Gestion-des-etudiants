<?php
	include("auth.php");
	if ($password==$repeatpassword) {
		# chiffrage
		$password = md5($password);
		include('conn.php');
		$req= $bdd->prepare('INSERT INTO t_login(lo_username, lo_password, lo_email, lo_date) VALUES(:username, :password, :email, :date1)');
		$req->execute (array(
		    'username' => htmlspecialchars($_POST['username']),
		    'password' => htmlspecialchars($_POST['password']),
		    'email' => htmlspecialchars($_POST['email']),
		    'date1' => date("Y-m-d H:i:s"),
		));
	} else echo "les 2 passwords ne sont pas identiques";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Inscription</title>
</head>
<body>
<ul>
	<li><a href='accueil.php'> Accueil</a></li>
	<li><a href='register2.php'> S'inscrire</a></li>
	<li><a href='filtre.php'> Filtrage des élèves </a></li>
	<li><a href='info.php'> Information sur un élèves </a></li>
	<li><a href='listefinal.php'> Listes des élèves </a></li>
</ul>
<h1><span style="padding-left: 40px;">Inscrire un Administrateur :</span></h1>
<form method="post" action="register.php">
	<div>
		<p><label>Username</label> : </p><p><input type="text" name="username" required></p>
		<p> <label>Email</label> : </p><p><input type="email" name="email" required></p>
		<p> <label>Password</label> : </p><p><input type="password" name="password" required></p>
		<p> <label>Repeat password</label> : </p><p><input type="password" name="repeatpassword" required></p>
		<p><input type="submit" value="S'incrire"></p>	
	</div>
</form>
</body>
</html>