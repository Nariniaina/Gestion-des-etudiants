<?php
    session_start();
    $cla = htmlentities(trim($_POST['classe']));
    $id = htmlentities(trim($_POST['numero'])); //enleve tous les caractere speciaux, declaration des variables
    $trn_date = date("Y-m-d");
    include('conn.php');
    $bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');
        ?>
    <?php
        include('conn.php');
        $query=mysqli_query($conn,"select cla_id as clas from `t_classe` where cla_nom='$cla'");
        $row=mysqli_fetch_array($query);
        $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
        mysqli_select_db($connect,"gestioneleve");  //connexion à la base
        $req="INSERT INTO a_classe(cla_id,el_id,aclasse_date) values ('$cla','$id','$trn_date')";  //requete SQL insertion 
        mysqli_query($connect,$req);
?>
<?php 
header('location:classe.php');?>