<?php 
	require_once("conn.php");
	$req = "select * from t_eleve";
	$resultat = mysqli_query($conn,$req) or die(mysqli_error());
 ?>
 <html>
 <body>
 	<table>
 		<tr>
 			<th>NUMERO</th>
 			<th>NOM</th>
 			<th>PRENOM</th>
 			<th>DATE DE NAISSANCE</th>
 			<th>SEXE</th>
 			<th>ANNEE D'INSCRIPTION</th>
 			<th>EMAIL</th>
 			<th>DIPLOME</th>
 			<th>OPTION</th>
 		</tr>
 		<?php  while ($etudiant = mysqli_fetch_assoc($resultat))  ?>
 		<tr>
 			<td><?php echo ($etudiant['el_id']); ?></td>
 		</tr>
 	</table>
 </body>
 </html>