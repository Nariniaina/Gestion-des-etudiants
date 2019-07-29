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
$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');

echo "<h1><div><span>Voici la liste de tous les matières :</span></h1>";
echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNombre total :&nbsp"
?>
<?php
	include('conn.php');
	$query=mysqli_query($conn,"select count(mat_id) as total from `t_matiere`");
	$row=mysqli_fetch_array($query);
		?>
	<?php echo $row['total'],"</div>"; 
		?>
	<?php 
		require_once("conn.php");
		$req = "select * from t_matiere";
		$resultat = mysqli_query($conn,$req) or die(mysql_error());
 	?>
 	<table>
 		<tr>
 			<th>NUMERO</th>
 			<th>NOM DE LA MATIERE</th>
 			<th>NOM DU PROFESSEUR EN CHARGE</th>
 			<th>MODIFICATION</th>
 		</tr>
 		<?php  while ($mat = mysqli_fetch_assoc($resultat))  {  ?>
 		<tr>
 			<td><?php echo ($mat['mat_id']); ?></td>
 			<td><?php echo ($mat['mat_nom']); ?></td>
 			<td><?php echo ($mat['mat_prof']); ?></td>
 			<td><span><a href="traitement9.php?code=<?php echo ($mat['mat_id']); ?>">Supprimer</a></span></td>
 		</tr>
<?php } ?>
 	</table>
<?php 
	echo "<br><br><br></br></br></br>";
 ?>

</body>
</html>