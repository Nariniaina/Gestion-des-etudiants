<?php
    include("auth.php");
    require_once("conn.php");
    $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
    mysqli_select_db($connect,"gestioneleve");  //connexion à la base
    $req="create table temp_exam(ex_id integer auto_increment primary key, el_id integer, ex_date date,ex_note integer (3) , sa_id integer, mat_id integer);";  //requete SQL insertion 
    mysqli_query($connect,$req);  
    $query=mysqli_query($conn,"select count(el_id) as total from `t_eleve`");
    $row=mysqli_fetch_array($query);
    $date = htmlentities(trim($_POST['date']));
    $numsalle = htmlentities(trim($_POST['numsalle']));
    $matiere = htmlentities(trim($_POST['matiere']));
    $init = $row['total'];
    for ($i=0; $i < $init; $i++) { 
        # code...
        include('conn.php');
        $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
        mysqli_select_db($connect,"gestioneleve");  //connexion à la base
        $req="INSERT INTO temp_exam(ex_date,sa_id,mat_id) values ('$date','$numsalle','$matiere')";  //requete SQL insertion 
        mysqli_query($connect,$req);
    }
?>