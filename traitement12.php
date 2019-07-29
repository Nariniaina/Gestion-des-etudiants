<?php
    include("auth.php");
    require_once("conn.php");
    include('conn.php');
    $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
    mysqli_select_db($connect,"gestioneleve");  //connexion à la base
    $req1="create table temp_exam(ex_id integer auto_increment primary key, el_id integer, ex_date date,ex_note integer (3) , sa_id integer, mat_id integer);";  //requete SQL insertion 
    mysqli_query($connect,$req1);
?>