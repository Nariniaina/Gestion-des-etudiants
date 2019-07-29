<?php
    include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Examen managment</title>
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
    <div>
        <h1><span>Programmer l'examen</span></h1>
        <p><label style="color: black">DATE DE L'EXAMEN :</label>
        <p><input type="date" name="date" required></p>
        <p><label style="color: black">NUMERO DE LA SALLE D'EXAMEN :</label>
        <p><input type="text" name='numsalle'></p>
        <p><label style="color: black">NUMERO DE LA MATIERE :</label>
        <p><input type="text" name='matiere'></p>
        <?php 
        include('conn.php');
        echo "<h1><span>Voici la liste de tous les étudiants en L1 </span></h1>";
        echo "<p>Nombre total :&nbsp"
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
            ?><div>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
                        <th>DATE D'INSCRIPTION </th>
                        <th>EMAIL</th>
                        <th>OPTION </th>
                        <th>NOM DE SA CLASSE</th>
                        <th>AJOUTER</th>
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
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Ajouter</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>

        <?php 
        include('conn.php');
        echo "<h1><span>Voici la liste de tous les étudiants en L2 </span></h1>";
        echo "<p>Nombre total :&nbsp"
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
            ?><div>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
                        <th>DATE D'INSCRIPTION </th>
                        <th>EMAIL</th>
                        <th>OPTION </th>
                        <th>NOM DE SA CLASSE</th>
                        <th>AJOUTER</th>
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
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Ajouter</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>         

            <?php 
        include('conn.php');
        echo "<h1><span>Voici la liste de tous les étudiants en L3 </span></h1>";
        echo "<p>Nombre total :&nbsp"
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
            ?><div>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
                        <th>DATE D'INSCRIPTION </th>
                        <th>EMAIL</th>
                        <th>OPTION </th>
                        <th>NOM DE SA CLASSE</th>
                        <th>AJOUTER</th>
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
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Ajouter</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>   

            <?php 
        include('conn.php');
        echo "<h1><span>Voici la liste de tous les étudiants en M1 </span></h1>";
        echo "<p>Nombre total :&nbsp"
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
            ?><div>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
                        <th>DATE D'INSCRIPTION </th>
                        <th>EMAIL</th>
                        <th>OPTION </th>
                        <th>NOM DE SA CLASSE</th>
                        <th>AJOUTER</th>
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
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Ajouter</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>

            <?php 
        include('conn.php');
        echo "<h1><span>Voici la liste de tous les étudiants en M2 </span></h1>";
        echo "<p>Nombre total :&nbsp"
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
            ?><div>
                <table>
                    <tr>
                        <th>NUMERO DE L'ETUDIANT</th>
                        <th>NOM </th>
                        <th>PRENOM</th>
                        <th>DATE D'INSCRIPTION </th>
                        <th>EMAIL</th>
                        <th>OPTION </th>
                        <th>NOM DE SA CLASSE</th>
                        <th>AJOUTER</th>
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
                        <td><span><a href="traitement11.php?code=<?php echo ($cla['el_id']); ?>">Ajouter</a></span></td>
                    </tr>
            <?php } ?>
                </table>
            <?php echo "<br></br>"; ?>
    </div>
    </form>
</body>
</html>