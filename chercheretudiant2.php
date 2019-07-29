<?php 
	require_once("conn.php");
	$mc = "NULL";
	if (isset($_POST['motcle'])) {
        $mc = $_POST['motcle'];
     }
     $req = "select * from t_eleve";
     $rs = mysqli_query($conn,$req) or die(mysqli_error());
 ?>
 <html>
 <body>
 	<form method="POST" action="chercheretudiant2.php">
            Mot clé :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="motcle"><p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="chercher"></p>
        </div>
    </form>
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
 			<th>MODIFICATION</th>
 		</tr>
 		<?php  while ($etudiant = mysqli_fetch_assoc($rs))  {  ?>
 		<tr>
 			<td><?php echo ($etudiant['el_id']); ?></td>
 			<td><?php echo ($etudiant['el_nom']); ?></td>
 			<td><?php echo ($etudiant['el_prenom']); ?></td>
 			<td><?php echo ($etudiant['el_ddn']); ?></td>
 			<td><?php echo ($etudiant['el_sexe']); ?></td>
 			<td><?php echo ($etudiant['el_inscription']); ?></td>
 			<td><?php echo ($etudiant['el_email']); ?></td>
 			<td><?php echo ($etudiant['el_diplome']); ?></td>
 			<td><?php echo ($etudiant['el_option']); ?></td>
 			<td><span><a href="info.php?code=<?php echo ($etudiant['el_id']); ?>">Editer</a></span></td>
 		</tr>
		<?php } ?>
 	</table>
 </body>
 </html>
 <link rel="stylesheet" type="text/css" href="style.css">