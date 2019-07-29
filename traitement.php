<?php
include("auth.php");
include('conn.php');
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
include('conn.php');
$req= $bdd->prepare('INSERT INTO t_eleve(el_nom, el_prenom, el_ddn, el_sexe, el_inscription, el_email, el_diplome, el_option) VALUES(:nom, :prenom, :dates, :sexe, :date1, :email, :dip ,:option)');
$req->execute (array(
    'nom' => htmlspecialchars($_POST['nom']),
    'prenom' => htmlspecialchars($_POST['prenom']),
    'dates' => htmlspecialchars($_POST['dates']),
    'sexe' => htmlspecialchars($_POST['sexe']),
    'date1' => date("Y"),
    'email' => htmlspecialchars($_POST['email']),
    'dip' => htmlspecialchars($_POST['diplome']),
    'option' => htmlspecialchars($_POST['options']),
));
?>
<?php 
header('location:accueil.php');?>