<?php

echo "<ul>
        <li><a href='accueil.php'> Accueil</a></li>
        <li><a href='register2.php'> S'inscrire</a></li>
        <li><a href='filtre.php'> Filtrage des élèves </a></li>
        <li><a href='info.php'> Information sur un élèves </a></li>
        <li><a href='listefinal.php'> Listes des élèves </a></li>
    </ul>";

echo "<h1><span>Voici la liste de tous les élèves :</span></h1>";

echo "<table>
  <tr>
    <th>Numero</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Date de naissance</th>
    <th>Adresse mail</th>
    <th>Diplome</th>
    <th>Option</th>
  </tr>";

$bdd = new PDO('mysql:host=localhost;dbname=gestion_etudiant', 'root', '');

$requete="select * from eleve";
$requetes="select * from eleve";
		$resultats=$bdd->query($requete);
		$ligne = $resultats->fetch(PDO::FETCH_OBJ) ;
		while($ligne) {
			echo "<tr><td>".$ligne->el_id."<td>".$ligne->el_nom."<td>".$ligne->el_prenom."<td>".$ligne->el_ddn."<td>".$ligne->el_adressemail."<td>".$ligne->el_diplome."<td>".$ligne->el_opt."</td></tr>";
			$ligne = $resultats->fetch(PDO::FETCH_OBJ) ;
					}
?>

<link rel="stylesheet" type="text/css" href="style.css">