<?php 
    include("auth.php");
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
            <li style="float: left; font-size: 17px"><a href='retour.php'>←&nbsp&nbspRetour</a></li>
        </ul>
    </span>
    <?php 
    	echo "<h1><div><span>Selectionner les étudiants à ajouter pour l'examen </span></h1></div>";
     ?>
            <?php 
                require_once("conn.php");
                $req = "select el.el_id, el.el_nom, el.el_prenom, el.el_email,el.el_option, cla.cla_nom as classe, ex.ex_id as examen from temp_exam ex right join (t_eleve el inner join (a_classe cl inner join t_classe cla on cl.cla_id = cla.cla_id)  on el.el_id = cl.el_id) on ex.el_id = el.el_id having examen is NULL && classe like 'L1%';";
                $resultat = mysqli_query($conn,$req) or die(mysqli_error());
            ?>
            <div>
            	<?php echo "<h4><span>Voici la liste de tous les étudiants en L1 </span></h4>";
        			?>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
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
                        <td><?php echo ($cla['el_email']); ?></td>
                        <td><?php echo ($cla['el_option']); ?></td>
                        <td><?php echo ($cla['classe']); ?></td>
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Selectionner</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>

        <?php 
                require_once("conn.php");
                $req = "select el.el_id, el.el_nom, el.el_prenom, el.el_email,el.el_option, cla.cla_nom as classe, ex.ex_id as examen from temp_exam ex right join (t_eleve el inner join (a_classe cl inner join t_classe cla on cl.cla_id = cla.cla_id)  on el.el_id = cl.el_id) on ex.el_id = el.el_id having examen is NULL && classe like 'L2%';";
                $resultat = mysqli_query($conn,$req) or die(mysql_error());
            ?>
                <?php echo "<h4><span>Voici la liste de tous les étudiants en L2 </span></h4>";
                    ?>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
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
                        <td><?php echo ($cla['el_email']); ?></td>
                        <td><?php echo ($cla['el_option']); ?></td>
                        <td><?php echo ($cla['classe']); ?></td>
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Selectionner</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>    

            <?php 
                require_once("conn.php");
                $req = "select el.el_id, el.el_nom, el.el_prenom, el.el_email,el.el_option, cla.cla_nom as classe, ex.ex_id as examen from temp_exam ex right join (t_eleve el inner join (a_classe cl inner join t_classe cla on cl.cla_id = cla.cla_id)  on el.el_id = cl.el_id) on ex.el_id = el.el_id having examen is NULL && classe like 'L3%';";
                $resultat = mysqli_query($conn,$req) or die(mysql_error());
            ?>
                <?php echo "<h4><span>Voici la liste de tous les étudiants en L3 </span></h4>";
                    ?>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
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
                        <td><?php echo ($cla['el_email']); ?></td>
                        <td><?php echo ($cla['el_option']); ?></td>
                        <td><?php echo ($cla['classe']); ?></td>
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Selectionner</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?> 

            <?php 
                require_once("conn.php");
                $req = "select el.el_id, el.el_nom, el.el_prenom, el.el_email,el.el_option, cla.cla_nom as classe, ex.ex_id as examen from temp_exam ex right join (t_eleve el inner join (a_classe cl inner join t_classe cla on cl.cla_id = cla.cla_id)  on el.el_id = cl.el_id) on ex.el_id = el.el_id having examen is NULL && classe like 'M1%';";
                $resultat = mysqli_query($conn,$req) or die(mysql_error());
            ?>
                <?php echo "<h4><span>Voici la liste de tous les étudiants en M1 </span></h4>";
                    ?>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
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
                        <td><?php echo ($cla['el_email']); ?></td>
                        <td><?php echo ($cla['el_option']); ?></td>
                        <td><?php echo ($cla['classe']); ?></td>
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Selectionner</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>

            <?php 
                require_once("conn.php");
                $req = "select el.el_id, el.el_nom, el.el_prenom, el.el_email,el.el_option, cla.cla_nom as classe, ex.ex_id as examen from temp_exam ex right join (t_eleve el inner join (a_classe cl inner join t_classe cla on cl.cla_id = cla.cla_id)  on el.el_id = cl.el_id) on ex.el_id = el.el_id having examen is NULL && classe like 'M2%';";
                $resultat = mysqli_query($conn,$req) or die(mysql_error());
            ?>
                <?php echo "<h4><span>Voici la liste de tous les étudiants en M2 </span></h4>";
                    ?>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
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
                        <td><?php echo ($cla['el_email']); ?></td>
                        <td><?php echo ($cla['el_option']); ?></td>
                        <td><?php echo ($cla['classe']); ?></td>
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Selectionner</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>
            <form method="post" action="traitement12.php">
            <p style="text-align: center;  width: 100%;"><span><input type="submit" value="CONFIRMER"></span></p>
            </form>
    </form>
 </body>
 </html>