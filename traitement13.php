<?php
    session_start();
    require_once("conn.php");
    $connect = mysqli_connect('localhost','root','') or die ('error'); //connexion au serveur SQL
    mysqli_select_db($connect,"gestioneleve");  //connexion à la base
    $code = $_GET['code'];
    $query1=mysqli_query($conn,"select ex_date as date from a_examen where ex_id = '$code';");
    $row=mysqli_fetch_array($query1);
    $query2=mysqli_query($conn,"select sa_id as salle from a_examen where ex_id = '$code';");
    $row1=mysqli_fetch_array($query2);
    $query3=mysqli_query($conn,"select mat_id as matiere from a_examen where ex_id = '$code';");
    $row2=mysqli_fetch_array($query3);
    $datefinal = $row['date'];
    $said = $row1['salle'];
    $matid = $row2['matiere'];
?>
<?php 
    $requete = "select el.el_id as id,el.el_nom as 'nom',el.el_prenom as 'prenom',el.el_email as 'email', el.el_sexe as 'sexe', el.el_option as 'option', ex.ex_note as note, ex.ex_id as idex from t_eleve el inner join a_examen ex on ex.el_id = el.el_id where ex.sa_id = '$said' && ex.mat_id = '$matid' && ex.ex_date = '$datefinal';";
    $res = mysqli_query($conn,$requete) or die(mysqli_error());
 ?>
<h1><div><span>Voici la liste de tous les élèves inscrit dans cet examen :</span></h1>
<div>
    <table>
            <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>EMAIL</th>
                <th>SEXE</th>
                <th>OPTION</th>
                <th>NOTE</th>
                <th>MODIFICATION</th>
            </tr>
            <?php  while ($ress = mysqli_fetch_assoc($res))  {  ?>
            <tr>
                <td><?php echo ($ress['nom']); ?></td>
                <td><?php echo ($ress['prenom']); ?></td>
                <td><?php echo ($ress['email']); ?></td>
                <td><?php echo ($ress['sexe']); ?></td>
                <td><?php echo ($ress['option']); ?></td>
                <td><?php echo ($ress['note']); ?></td>
                <td><span><a href="traitement14.php?code=<?php echo ($ress['idex']); ?>">Mettre a jour la note</a></span></td>
            </tr>
            <?php } ?>
    </table>
</div>
 <link rel="stylesheet" type="text/css" href="style.css">