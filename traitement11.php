<?php
    include("auth.php");
    require_once("conn.php");
	include('conn.php');
	$query=mysqli_query($conn,"select count(ex_id) as examen from temp_exam where el_id is NULL;");
	$row=mysqli_fetch_array($query);
 	$ress = $row['examen']; 
    $code = $_GET['code'];
    $req="update temp_exam set el_id ='$code' where ex_id = '$ress'";
    $resultat = mysqli_query($conn,$req) or die(mysqli_error());
?>