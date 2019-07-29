<?php
    session_start();
    require_once("conn.php");
    $code = $_GET['code'];
    $req = "delete from t_salle where (sa_id = $code)";
    mysqli_query($conn,$req) or die("Vous ne pouvez pas supprimer une salle contenant déja des informations précieuses");
?>
<?php 
header('location:sallelist.php');?>