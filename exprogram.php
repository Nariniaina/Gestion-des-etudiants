<?php 

 ?>
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
            <li style="float: left; font-size: 17px"><a href='accueil.php'>←&nbsp&nbspRetour</a></li>
        </ul>
    </span>
    <?php 
    	echo "<h1><div><span>Selectionner les étudiants à ajouter pour l'examen </span></h1></div>";
     ?>
            <?php 
                require_once("conn.php");
                $req = "select el.el_id, el_nom, el.el_prenom ,el.el_inscription, el.el_email,el.el_option, cl.cla_nom as classe from t_eleve el inner JOIN (a_classe cla inner join t_classe cl on cla.cla_id = cl.cla_id) on el.el_id = cla.el_id HAVING classe like 'L1%'";
                $resultat = mysqli_query($conn,$req) or die(mysql_error());
            ?>
            <div>
            	<?php echo "<h4><span>Voici la liste de tous les étudiants en L1 </span></h4>";
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
                        <th>ACTION</th>
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
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Selectionner</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>

        <?php 
        include('conn.php');
        echo "<h4><span>Voici la liste de tous les étudiants en L2 </span></h4>";
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
                        <th>ACTION</th>
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
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Selectionner</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>         

            <?php 
        include('conn.php');
        echo "<h4><span>Voici la liste de tous les étudiants en L3 </span></h4>";
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
                        <th>ACTION</th>
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
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Selectionner</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>   

            <?php 
        include('conn.php');
        echo "<h4><span>Voici la liste de tous les étudiants en M1 </span></h4>";
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
                        <th>ACTION</th>
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
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Selectionner</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>

            <?php 
        include('conn.php');
        echo "<h4><span>Voici la liste de tous les étudiants en M2 </span></h4>";
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
                        <th>ACTION</th>
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
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Selectionner</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>
 </body>
 </html>