<?php
    session_start();
    $salle = htmlentities(trim($_POST['salle']));
    include('conn.php');
    $bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');
        ?>
    <?php
        include('conn.php');
        $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
        mysqli_select_db($connect,"gestioneleve");  //connexion à la base
        $req="INSERT INTO t_salle(sa_nom) values ('$salle')";  //requete SQL insertion 
        mysqli_query($connect,$req);
?>
<?php 
header('location:salle.php');?>