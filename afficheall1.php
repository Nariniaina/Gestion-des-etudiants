<?php 
	require_once("conn.php");
	$req = "select * from t_eleve";
	$resultat = mysqli_query($conn,$req) or die(mysql_error());
 ?>
 <html>
 <body>
 	<table>
 		<tr>
 			<th>NUMERO</th>
 			<th>NOM</th>
 			<th>PRENOM</th>
 			<th>ANNEE D'INSCRIPTION</th>
 			<th>EMAIL</th>
 			<th>OPTION</th>
 			<th>MODIFICATION</th>
 		</tr>
 		<?php  while ($etudiant = mysqli_fetch_assoc($resultat))  {  ?>
 		<tr>
 			<td><?php echo ($etudiant['el_id']); ?></td>
 			<td><?php echo ($etudiant['el_nom']); ?></td>
 			<td><?php echo ($etudiant['el_prenom']); ?></td>
 			<td><?php echo ($etudiant['el_inscription']); ?></td>
 			<td><?php echo ($etudiant['el_email']); ?></td>
 			<td><?php echo ($etudiant['el_option']); ?></td>
 			<td><span><a href="info.php?code=<?php echo ($etudiant['el_id']); ?>">Editer</a></span></td>
 		</tr>
		<?php } ?>
 	</table>

 </body>
 </html>
 <link rel="stylesheet" type="text/css" href="style.css">