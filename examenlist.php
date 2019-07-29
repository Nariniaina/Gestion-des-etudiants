<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<span>
        <ul style="background-color: MediumSeaGreen; list-style-type: none; overflow: hidden;">
            <li style="float: left; font-size: 17px"><a href='accueil.php'>←</a></li>
            <li style="float: left; font-size: 17px; "><a href='gestion.php'>⌂</a></li>
            <li style="float: left;"><a href='retardlist.php'> ① Retard</a></li>
            <li style="float: left;"><a href='absencelist.php'> ② Absence</a></li>
            <li style="float: left;"><a href='classelist.php'> ③ Classe</a></li>
            <li style="float: left;"><a href='matierelist.php'> ④ Matiere</a></li>
            <li style="float: left;"><a href='sallelist.php'> ⑤ Salle</a></li>
            <li style="float: left;"><a href='tempslist.php'> ⑥ Emploie du temps</a></li>
            <li style="float: left;"><a href='examenlist.php'> ⑦ Examen</a></li>
        </ul>
    </span>
<?php
include("auth.php");
include('conn.php');
echo "<h1><div><span>Voici la liste des examens programmés :</span></h1>";
?>
	<?php 
		require_once("conn.php");
		$req = "select ex.ex_id as examen,ex.ex_date as date, mat.mat_nom as matiere, sa.sa_nom as salle from t_matiere mat inner join (a_examen ex inner join t_salle sa on ex.sa_id = sa.sa_id) on mat.mat_id = ex.mat_id group by date,matiere, salle;";
		$resultat = mysqli_query($conn,$req) or die(mysql_error());
 	?>
 	<table>
 		<tr>
 			<th>DATE</th>
 			<th>NOM DE LA MATIERE</th>
 			<th>NOM DE LA SALLE</th>
            <th>Les étudiants évalués</th>
 		</tr>
 		<?php  while ($salle = mysqli_fetch_assoc($resultat))  {  ?>
 		<tr>
 			<td><?php echo ($salle['date']); ?></td>
 			<td><?php echo ($salle['matiere']); ?></td>
            <td><?php echo ($salle['salle']); ?></td>
 			<td><span><a href="traitement13.php?code=<?php echo ($salle['examen']); ?>">Afficher</a></span></td>
 		</tr>
<?php } ?>
 	</table>
<?php 
	echo "<br><br><br></br></br></br>";
 ?>

</body>
</html>