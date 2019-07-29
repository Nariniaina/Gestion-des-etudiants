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
	<?php 
		require_once("conn.php");
		$req = "select * from t_classe";
		$resultat = mysqli_query($conn,$req) or die(mysql_error());
 	?>
 	<table>
 		<tr>
 			<th>NUMERO</th>
 			<th>NOM DE LA CLASSE</th>
 			<th>MODIFICATION</th>
 		</tr>
 		<?php  while ($cla = mysqli_fetch_assoc($resultat))  {  ?>
 		<tr>
 			<td><?php echo ($cla['cla_id']); ?></td>
 			<td><?php echo ($cla['cla_nom']); ?></td>
 			<td><span><a href="traitement8.php?code=<?php echo ($cla['cla_id']); ?>">Supprimer</a></span></td>
 		</tr>
<?php } ?>
 	</table>

<?php
include('conn.php');
$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');

echo "<h1><div><span>Voici la liste de la classe de tous les étudiants :</span></h1>";
echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNombre total :&nbsp"
?>

<?php
	include('conn.php');
	$query=mysqli_query($conn,"select count(cla_id) as total from `t_classe`");
	$row=mysqli_fetch_array($query);
		?>
	<?php echo $row['total'],"</div>"; 
		?>
	<?php 
		require_once("conn.php");
		$req = "select el.el_id, el_nom, el.el_prenom ,el.el_inscription, el.el_email,el.el_option, cl.cla_nom from t_eleve el inner JOIN (a_classe cla inner join t_classe cl on cla.cla_id = cl.cla_id) on el.el_id = cla.el_id";
		$resultat = mysqli_query($conn,$req) or die(mysql_error());
 	?>
 	<table>
 		<tr>
 			<th>NUMERO DE L'ETUDIANT</th>
 			<th>NOM </th>
 			<th>PRENOM</th>
 			<th>DATE D'INSCRIPTION </th>
 			<th>EMAIL</th>
 			<th>OPTION </th>
 			<th>NOM DE SA CLASSE</th>
 		</tr>
 		<?php  while ($cla = mysqli_fetch_assoc($resultat))  {  ?>
 		<tr>
 			<td><?php echo ($cla['el_id']); ?></td>
 			<td><?php echo ($cla['el_nom']); ?></td>
 			<td><?php echo ($cla['el_prenom']); ?></td>
 			<td><?php echo ($cla['el_inscription']); ?></td>
 			<td><?php echo ($cla['el_email']); ?></td>
 			<td><?php echo ($cla['el_option']); ?></td>
 			<td><?php echo ($cla['cla_nom']); ?></td>
 		</tr>
<?php } ?>
 	</table>

<?php
include('conn.php');
$bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');

echo "<h1><div><span>Voici la liste de tous les étudiants sans classe  :</span></h1>";
echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNombre total :&nbsp"
?>

<?php
	include('conn.php');
	$query=mysqli_query($conn,"select count(cla_id) as total from `t_classe`");
	$row=mysqli_fetch_array($query);
		?>
	<?php echo $row['total'],"</div>"; 
		?>
	<?php 
		require_once("conn.php");
		$req = "select el.el_id, el_nom, el.el_prenom ,el.el_inscription, el.el_email,el.el_option, cl.cla_nom from t_eleve el left JOIN (a_classe cla inner join t_classe cl on cla.cla_id = cl.cla_id) on el.el_id = cla.el_id HAVING cla_nom is NULL;";
		$resultat = mysqli_query($conn,$req) or die(mysql_error());
 	?>
 	<table>
 		<tr>
 			<th>NUMERO DE L'ETUDIANT</th>
 			<th>NOM </th>
 			<th>PRENOM</th>
 			<th>DATE D'INSCRIPTION </th>
 			<th>EMAIL</th>
 			<th>OPTION </th>
 		</tr>
 		<?php  while ($cla = mysqli_fetch_assoc($resultat))  {  ?>
 		<tr>
 			<td><?php echo ($cla['el_id']); ?></td>
 			<td><?php echo ($cla['el_nom']); ?></td>
 			<td><?php echo ($cla['el_prenom']); ?></td>
 			<td><?php echo ($cla['el_inscription']); ?></td>
 			<td><?php echo ($cla['el_email']); ?></td>
 			<td><?php echo ($cla['el_option']); ?></td>
 		</tr>
<?php } ?>
 	</table>
<?php 
	echo "<br><br><br></br></br></br>";
 ?>

 <?php 
        include('conn.php');
        echo "<h1><div><span>Voici la liste de tous les étudiants en L1 </span></h1>";
        echo "<p><div>Nombre total :&nbsp"
        ?>
        <?php
            include('conn.php');
            $query=mysqli_query($conn,"select count(cla_id) as total from `t_classe`");
            $row=mysqli_fetch_array($query);
                ?>
            <?php echo $row['total'],"</div>"; 
                ?>
            <?php 
                require_once("conn.php");
                $req = "select el.el_id, el_nom, el.el_prenom ,el.el_inscription, el.el_email,el.el_option, cl.cla_nom as classe from t_eleve el inner JOIN (a_classe cla inner join t_classe cl on cla.cla_id = cl.cla_id) on el.el_id = cla.el_id HAVING classe like 'L1%'";
                $resultat = mysqli_query($conn,$req) or die(mysql_error());
            ?>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
                        <th>DATE D'INSCRIPTION </th>
                        <th>EMAIL</th>
                        <th>OPTION </th>
                        <th>NOM DE SA CLASSE</th>
                    </tr>
                    <?php  while ($cla = mysqli_fetch_assoc($resultat))  {  ?>
                    <tr>
                        <td><?php echo ($cla['el_id']); ?></td>
                        <td><?php echo ($cla['el_nom']); ?></td>
                        <td><?php echo ($cla['el_prenom']); ?></td>
                        <td><?php echo ($cla['el_inscription']); ?></td>
                        <td><?php echo ($cla['el_email']); ?></td>
                        <td><?php echo ($cla['el_option']); ?></td>
                        <td><?php echo ($cla['classe']); ?></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>

        <?php 
        include('conn.php');
        echo "<h1><div><span>Voici la liste de tous les étudiants en L2 </span></h1>";
        echo "<p><div>Nombre total :&nbsp"
        ?>
        <?php
            include('conn.php');
            $query=mysqli_query($conn,"select count(cla_id) as total from `t_classe`");
            $row=mysqli_fetch_array($query);
                ?>
            <?php echo $row['total'],"</div>"; 
                ?>
            <?php 
                require_once("conn.php");
                $req = "select el.el_id, el_nom, el.el_prenom ,el.el_inscription, el.el_email,el.el_option, cl.cla_nom as classe from t_eleve el inner JOIN (a_classe cla inner join t_classe cl on cla.cla_id = cl.cla_id) on el.el_id = cla.el_id HAVING classe like 'L2%'";
                $resultat = mysqli_query($conn,$req) or die(mysql_error());
            ?>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
                        <th>DATE D'INSCRIPTION </th>
                        <th>EMAIL</th>
                        <th>OPTION </th>
                        <th>NOM DE SA CLASSE</th>
                    </tr>
                    <?php  while ($cla = mysqli_fetch_assoc($resultat))  {  ?>
                    <tr>
                        <td><?php echo ($cla['el_id']); ?></td>
                        <td><?php echo ($cla['el_nom']); ?></td>
                        <td><?php echo ($cla['el_prenom']); ?></td>
                        <td><?php echo ($cla['el_inscription']); ?></td>
                        <td><?php echo ($cla['el_email']); ?></td>
                        <td><?php echo ($cla['el_option']); ?></td>
                        <td><?php echo ($cla['classe']); ?></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>         

            <?php 
        include('conn.php');
        echo "<h1><div><span>Voici la liste de tous les étudiants en L3 </span></h1>";
        echo "<p><div>Nombre total :&nbsp"
        ?>
        <?php
            include('conn.php');
            $query=mysqli_query($conn,"select count(cla_id) as total from `t_classe`");
            $row=mysqli_fetch_array($query);
                ?>
            <?php echo $row['total'],"</div>"; 
                ?>
            <?php 
                require_once("conn.php");
                $req = "select el.el_id, el_nom, el.el_prenom ,el.el_inscription, el.el_email,el.el_option, cl.cla_nom as classe from t_eleve el inner JOIN (a_classe cla inner join t_classe cl on cla.cla_id = cl.cla_id) on el.el_id = cla.el_id HAVING classe like 'L3%'";
                $resultat = mysqli_query($conn,$req) or die(mysql_error());
            ?>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
                        <th>DATE D'INSCRIPTION </th>
                        <th>EMAIL</th>
                        <th>OPTION </th>
                        <th>NOM DE SA CLASSE</th>
                    </tr>
                    <?php  while ($cla = mysqli_fetch_assoc($resultat))  {  ?>
                    <tr>
                        <td><?php echo ($cla['el_id']); ?></td>
                        <td><?php echo ($cla['el_nom']); ?></td>
                        <td><?php echo ($cla['el_prenom']); ?></td>
                        <td><?php echo ($cla['el_inscription']); ?></td>
                        <td><?php echo ($cla['el_email']); ?></td>
                        <td><?php echo ($cla['el_option']); ?></td>
                        <td><?php echo ($cla['classe']); ?></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>   

            <?php 
        include('conn.php');
        echo "<h1><div><span>Voici la liste de tous les étudiants en M1 </span></h1>";
        echo "<p><div>Nombre total :&nbsp"
        ?>
        <?php
            include('conn.php');
            $query=mysqli_query($conn,"select count(cla_id) as total from `t_classe`");
            $row=mysqli_fetch_array($query);
                ?>
            <?php echo $row['total'],"</div>"; 
                ?>
            <?php 
                require_once("conn.php");
                $req = "select el.el_id, el_nom, el.el_prenom ,el.el_inscription, el.el_email,el.el_option, cl.cla_nom as classe from t_eleve el inner JOIN (a_classe cla inner join t_classe cl on cla.cla_id = cl.cla_id) on el.el_id = cla.el_id HAVING classe like 'M1%'";
                $resultat = mysqli_query($conn,$req) or die(mysql_error());
            ?>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
                        <th>DATE D'INSCRIPTION </th>
                        <th>EMAIL</th>
                        <th>OPTION </th>
                        <th>NOM DE SA CLASSE</th>
                    </tr>
                    <?php  while ($cla = mysqli_fetch_assoc($resultat))  {  ?>
                    <tr>
                        <td><?php echo ($cla['el_id']); ?></td>
                        <td><?php echo ($cla['el_nom']); ?></td>
                        <td><?php echo ($cla['el_prenom']); ?></td>
                        <td><?php echo ($cla['el_inscription']); ?></td>
                        <td><?php echo ($cla['el_email']); ?></td>
                        <td><?php echo ($cla['el_option']); ?></td>
                        <td><?php echo ($cla['classe']); ?></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>

            <?php 
        include('conn.php');
        echo "<h1><div><span>Voici la liste de tous les étudiants en M2 </span></h1>";
        echo "<p><div>Nombre total :&nbsp"
        ?>
        <?php
            include('conn.php');
            $query=mysqli_query($conn,"select count(cla_id) as total from `t_classe`");
            $row=mysqli_fetch_array($query);
                ?>
            <?php echo $row['total'],"</div>"; 
                ?>
            <?php 
                require_once("conn.php");
                $req = "select el.el_id, el_nom, el.el_prenom ,el.el_inscription, el.el_email,el.el_option, cl.cla_nom as classe from t_eleve el inner JOIN (a_classe cla inner join t_classe cl on cla.cla_id = cl.cla_id) on el.el_id = cla.el_id HAVING classe like 'M2%'";
                $resultat = mysqli_query($conn,$req) or die(mysql_error());
            ?>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
                        <th>DATE D'INSCRIPTION </th>
                        <th>EMAIL</th>
                        <th>OPTION </th>
                        <th>NOM DE SA CLASSE</th>
                    </tr>
                    <?php  while ($cla = mysqli_fetch_assoc($resultat))  {  ?>
                    <tr>
                        <td><?php echo ($cla['el_id']); ?></td>
                        <td><?php echo ($cla['el_nom']); ?></td>
                        <td><?php echo ($cla['el_prenom']); ?></td>
                        <td><?php echo ($cla['el_inscription']); ?></td>
                        <td><?php echo ($cla['el_email']); ?></td>
                        <td><?php echo ($cla['el_option']); ?></td>
                        <td><?php echo ($cla['classe']); ?></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>

</body>
</html>