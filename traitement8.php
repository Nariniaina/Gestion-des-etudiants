<?php
    session_start();
    require_once("conn.php");
    $code = $_GET['code'];
    $req = "delete from t_classe where (cla_id = $code)";
    mysqli_query($conn,$req) or die("Vous ne pouvez pas supprimer une classe contenant déja des étudiants");
?>
<?php 
header('location:classelist.php');?>