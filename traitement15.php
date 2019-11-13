<?php
    include("auth.php");
    require_once("conn.php");
    $numero = $_POST['id'];
    $note = $_POST['note'];
    $req = "update a_examen set ex_note = '$note' where ex_id=$numero";
	mysqli_query($conn,$req) or die(mysqli_error());	
	header("location: examenlist.php");
?>