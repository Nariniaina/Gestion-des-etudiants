<?php
    include("auth.php");
    require_once("conn.php");
    include('conn.php');
    $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
    mysqli_select_db($connect,"gestioneleve");  //connexion à la base
    $req1="create table IF NOT EXISTS temp_exam(ex_id integer auto_increment primary key, el_id integer, ex_date date,ex_note integer (3) , sa_id integer, mat_id integer);";  //requete SQL insertion 
    mysqli_query($connect,$req1);
    $query1=mysqli_query($conn,"select count(ex_id) as examen from temp_exam where el_id is not NULL;");
    $row=mysqli_fetch_array($query1);
    $query2=mysqli_query($conn,"select count(el_id) as total from t_eleve;");
    $row1=mysqli_fetch_array($query2);
    $date = htmlentities(trim($_POST['date']));
    $numsalle = htmlentities(trim($_POST['numsalle']));
    $matiere = htmlentities(trim($_POST['matiere']));
    $init = $row['examen'];
    $fin = $row1['total'];
    $res =  $fin - $init + 1;
    for ($i=1; $i < $res; $i++) { 
        # code...
        include('conn.php');
        $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
        mysqli_select_db($connect,"gestioneleve");  //connexion à la base
        $req2="INSERT INTO temp_exam(ex_id,ex_date,sa_id,mat_id) values ('$i','$date','$numsalle','$matiere')";  //requete SQL insertion 
        mysqli_query($connect,$req2);
    }
?>
<?php 
header('location:exprogram.php');?>