<?php 
	include("auth.php");
    require_once("conn.php");
    $req="drop table temp_exam";
    $resultat = mysqli_query($conn,$req) or die(mysqli_error());
 ?>
 <?php 
header('location:examen.php');?>