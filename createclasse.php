<?php
    session_start();
    $nom = htmlentities(trim($_POST['nomclasse'])); //enleve tous les caractere speciaux, declaration des variables
    $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
    mysqli_select_db($connect,"gestioneleve");  //connexion à la base
    $req="INSERT INTO t_classe(cla_nom) values ('$nom')";  //requete SQL insertion 
    mysqli_query($connect,$req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Absence</title>
</head>
<body>
    <span>
        <ul style="background-color: MediumSeaGreen; list-style-type: none; overflow: hidden;">
            <li style="float: left;"><a href='accueil.php'> Accueil</a></li>
            <li style="float: left;"><a href='gestion.php'> Application</a></li>
        </ul>
    </span>
</body>
<?php
echo "<table>
  <tr>
    <th>Numero</th>
    <th>Classe</th>
  </tr>";

$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');
$requete="select * from t_classe";
        $resultats=$bdd->query($requete);
        $ligne = $resultats->fetch(PDO::FETCH_OBJ) ;
        while($ligne) {
            echo "<tr><td>".$ligne->cla_id."<td>".$ligne->cla_nom."</td></tr>";
            $ligne = $resultats->fetch(PDO::FETCH_OBJ) ;
                    }
?>
<div>
    <h1><span>Choisir la classe de l'etudiant</span></h1>
    <form method="post" action="traitement4.php">
    <p><label style="color: black">NUMERO DE L'ELEVE :</label>  
    <p><input type="text" name="numero" required></p>
    <p><label style="color: black">NUMERO DE LA CLASSE :</label>   </p>
    <p><input type="text" name="classe" required></p>
    <p><input type="submit" value="CONFIRMER"></p>
    </form>
</div>

<div>
    <h1><span>Créer une classe</span></h1>
    <form method="post" action="createclasse.php">
    <p><label style="color: black">NOM DE LA CLASSE :</label>  
    <p><input type="text" name="nomclasse" required></p>
    <p><input type="submit" value="CREER"></p>
    </form>
</div>
</body>
</html>
<?php
include('conn.php');
$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');

echo "<h1><div><span>Voici la liste de tous les classes :</span></h1>";
echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNombre total :&nbsp"
?>
<?php
include('conn.php');
$query=mysqli_query($conn,"select count(cla_id) as total from `t_classe`");
$row=mysqli_fetch_array($query);
?>
<?php echo $row['total'],"</div>"; 
?>