<?php
    session_start();
    require_once("conn.php");
    $code = $_GET['code'];
    $req = "delete from t_matiere where (mat_id = $code)";
    mysqli_query($conn,$req) or die("Vous ne pouvez pas supprimer une matiere contenant déja des informations précieuses");
?>
<?php 
header('location:matierelist.php');?>