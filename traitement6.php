<?php
    session_start();
    $matiere = htmlentities(trim($_POST['matiere']));
    $prof = htmlentities(trim($_POST['prof']));
    include('conn.php');
    $bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');
        ?>
    <?php
        include('conn.php');
        $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
        mysqli_select_db($connect,"gestioneleve");  //connexion à la base
        $req="INSERT INTO t_matiere(mat_nom,mat_prof) values ('$matiere','$prof')";  //requete SQL insertion 
        mysqli_query($connect,$req);
?>
<?php 
header('location:matiere.php');?>