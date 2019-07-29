<?php
    include("auth.php");
    require_once("conn.php");
    $code = $_GET['code'];    
    $date = htmlspecialchars($_POST['date']);
    $numsalle = htmlentities(trim($_POST['numsalle']));
    $matiere = htmlentities(trim($_POST['matiere']));
    $req="insert into a_examen (el_id, ex_date, sa_id , mat_id ) value ('$code','$date','$numsalle','$matiere')";
    $resultat = mysqli_query($conn,$req) or die(mysqli_error());
?>