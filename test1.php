<?php
    include('conn.php');
    $query=mysqli_query($conn,"select count(el_id) as total from `t_eleve`");
    $row=mysqli_fetch_array($query);
    ?>
    <?php echo $row['total']; 
    $init = 0;
    $fin = 5;
        ?>
    <?php 
    foreach ($init as $fin => $fin) {
        # code...
        include('conn.php');
        $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
        mysqli_select_db($connect,"gestioneleve");  //connexion à la base
        $req="INSERT INTO a_examen(el_id,ex_date,sa_id,mat_id) values ('1','1','1','1')";  //requete SQL insertion 
        mysqli_query($connect,$req);
    }

?>