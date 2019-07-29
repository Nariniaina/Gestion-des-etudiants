<?php
    session_start();
    require_once("conn.php");
    $code = $_GET['code'];
    $req = "select ex_date from a_examen where (ex_id = $code)";
    $res = mysqli_query($conn,$req) or die(mysqli_error());
    $req1 = "select sa_id from a_examen where (ex_id = $code)";
    $res1 = mysqli_query($conn,$req1) or die(mysqli_error());
    $req2 = "select mat_id from a_examen where (ex_id = $code)";
    $res2 = mysqli_query($conn,$req2) or die(mysqli_error());
    $etudiant = mysqli_fetch_assoc($res);
    $etudiant1 = mysqli_fetch_assoc($res1);
    $etudiant2 = mysqli_fetch_assoc($res2);
    $datefinal = ($etudiant['ex_date']);
    $matid = ($etudiant1['sa_id']);
    $said = ($etudiant2['mat_id']);
?>
<?php 
    $requete = "select el.el_id as id,el.el_nom as nom,el.el_prenom as prenom,el.el_email as email, el.el_sexe as sexe, el.el_option as option from t_eleve el inner join a_examen ex on ex.el_id = el.el_id where ex.sa_id = '$said' && ex.ex_date = '$datefinal' && ex.mat_id = '$matid';";
    $res3 = mysqli_query($conn,$requete) or die(mysqli_error());
 ?>
<table>
        <tr>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>EMAIL</th>
            <th>SEXE</th>
            <th>OPTION</th>
            <th>MODIFICATION</th>
        </tr>
        <?php  while ($ress = mysqli_fetch_assoc($res3))  {  ?>
        <tr>
            <td><?php echo ($ress['nom']); ?></td>
            <td><?php echo ($ress['prenom']); ?></td>
            <td><?php echo ($ress['email']); ?></td>
            <td><?php echo ($ress['sexe']); ?></td>
            <td><?php echo ($ress['option']); ?></td>
            <td><span><a href="traitement14.php?code=<?php echo ($ress['id']); ?>">Editer</a></span></td>
        </tr>
        <?php } ?>
    </table>
 <link rel="stylesheet" type="text/css" href="style.css">