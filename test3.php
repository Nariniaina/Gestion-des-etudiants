<?php
    include("auth.php");
    require_once("conn.php");
    include('conn.php');
    $query1=mysqli_query($conn,"select count(ex_id) as examen from temp_exam where el_id is not NULL;");
    $row=mysqli_fetch_array($query1);
    $query2=mysqli_query($conn,"select count(el_id) as total from t_eleve;");
    $row1=mysqli_fetch_array($query2);
    $init = $row['examen'];
    $fin = $row1['total'];
    $res =  $fin - $init;
    if ($res == '0') {
        $req1="insert into a_examen(el_id,ex_date,ex_note,sa_id,mat_id) select el_id,ex_date,ex_note,sa_id,mat_id from temp_exam;";
        $resultat = mysqli_query($conn,$req1) or die(mysqli_error());
        $req="drop table temp_exam";
        $resultat = mysqli_query($conn,$req) or die(mysqli_error());
    }
    else {
        $req="delete from temp_exam where el_id is NULL;";
        $resultat = mysqli_query($conn,$req) or die(mysqli_error());
    }
?>
<?php 
header('location:examen.php');?>