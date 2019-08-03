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
    <title>Absence</title>
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
            <li style="float: left;"><a href='examenlist.php'> ⑦ Examen</a></li>
        </ul>
    </span>
    <?php
        include('conn.php');
        $bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');

        echo "<h1><div><span>Voici la liste de tous déja absent :</span></h1>";
        echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNombre total :&nbsp"
    ?>
    <?php
        include('conn.php');
        $query=mysqli_query($conn,"select count(abs_id) as total from `t_absence`");
        $row=mysqli_fetch_array($query);
    ?>
    <?php echo $row['total'],"</div>"; 
        ?>
    <?php 
        require_once("conn.php");
        $req = "select abs.abs_id as id,abs.abs_date as date,el.el_nom as nom,el.el_prenom as prenom,cla.cla_nom as classe,abs.abs_motif as motif from t_classe cla right join (a_classe cl inner join (t_eleve el inner join t_absence abs on el.el_id = abs.el_id) on cl.el_id = el.el_id) on cla.cla_id = cl.cla_id;";
        $resultat = mysqli_query($conn,$req) or die(mysql_error());
    ?>
    <div>
    <table>
        <tr>
            <th>DATE</th>
            <th>NOM DE LA L'ELEVE</th>
            <th>PRENOM DE LA L'ELEVE</th>
            <th>CLASSE</th>
            <th>MOTIF</th>
        </tr>
        <?php  while ($cla = mysqli_fetch_assoc($resultat))  {  ?>
        <tr>
            <td><?php echo ($cla['date']); ?></td>
            <td><?php echo ($cla['nom']); ?></td>
            <td><?php echo ($cla['prenom']); ?></td>
            <td><?php echo ($cla['classe']); ?></td>
            <td><?php echo ($cla['motif']); ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>
    <?php
        include('conn.php');
        $bdd = new PDO('mysql:host=localhost;dbname=gestioneleve', 'root', '');

        echo "<h1><div><span>Voici la liste de tous élèves jamais absent :</span></h1>";
        echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNombre total :&nbsp"
    ?>
    <?php
        include('conn.php');
        $query=mysqli_query($conn,"select count(cla.cla_id) as total from t_classe cla right join (a_classe cl inner join (t_eleve el left join t_absence abs on el.el_id = abs.el_id) on cl.el_id = el.el_id) on cla.cla_id = cl.cla_id where abs.abs_date is NULL;");
        $row=mysqli_fetch_array($query);
    ?>
    <?php echo $row['total'],"</div>"; 
        ?>
    <?php 
        require_once("conn.php");
        $req = "select abs.abs_id as id,abs.abs_date as date,el.el_nom as nom,el.el_prenom as prenom,cla.cla_nom as classe,abs.abs_motif as motif from t_classe cla right join (a_classe cl inner join (t_eleve el left join t_absence abs on el.el_id = abs.el_id) on cl.el_id = el.el_id) on cla.cla_id = cl.cla_id having abs.abs_date is NULL;";
        $resultat = mysqli_query($conn,$req) or die(mysql_error());
    ?>
    <div>
    <table>
        <tr>
            <th>NOM DE LA L'ELEVE</th>
            <th>PRENOM DE LA L'ELEVE</th>
            <th>CLASSE</th>
        </tr>
        <?php  while ($cla = mysqli_fetch_assoc($resultat))  {  ?>
        <tr>
            <td><?php echo ($cla['nom']); ?></td>
            <td><?php echo ($cla['prenom']); ?></td>
            <td><?php echo ($cla['classe']); ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>  
</body>
</html>