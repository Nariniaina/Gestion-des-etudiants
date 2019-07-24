<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$connect = mysqli_connect('localhost','root','') or die ('error');
	mysqli_select_db($connect,"gestion_etudiant");
	$req="INSERT INTO login(lo_username,lo_password) values ('$username','$password')";
	mysqli_query($connect,$req);
?>