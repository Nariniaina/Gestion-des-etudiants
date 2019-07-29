<?php
    include("auth.php");
	require_once("conn.php");
	$id = $_GET['code'];
	$req = "delete from t_eleve where (el_id=$id)";
	mysqli_query($conn,$req) or die(mysqli_error());	
	require_once("listefinal.php");
?>