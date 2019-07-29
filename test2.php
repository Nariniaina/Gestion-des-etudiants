<?php
    include('conn.php');
    $query=mysqli_query($conn,"select count(el_id) as total from `t_eleve`");
    $row=mysqli_fetch_array($query);
    $init = $row['total'];
    for ($i=0; $i < $init; $i++) { 
        # code...
        include('conn.php');
        $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
        mysqli_select_db($connect,"gestioneleve");  //connexion à la base
        $req="INSERT INTO temp_exam(el_id,ex_note) values ('1','12')";  //requete SQL insertion 
        mysqli_query($connect,$req);
    }
?>