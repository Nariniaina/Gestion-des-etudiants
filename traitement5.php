<?php
    session_start();
    $numero = htmlentities(trim($_POST['numero']));
    $date = htmlentities(trim($_POST['date']));
    $numsalle = htmlentities(trim($_POST['numsalle']));
    $matiere = htmlentities(trim($_POST['matiere']));
    include('conn.php');
    $bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');
        ?>
    <?php
        include('conn.php');
        $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
        mysqli_select_db($connect,"gestioneleve");  //connexion à la base
        $req="INSERT INTO a_examen(el_id,ex_date,sa_id,mat_id) values ('$numero','$date','$numsalle','$matiere')";  //requete SQL insertion 
        mysqli_query($connect,$req);
?>
<?php 
header('location:examen.php');?>