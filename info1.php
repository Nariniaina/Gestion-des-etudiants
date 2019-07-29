<?php
    include("auth.php");
    require_once("conn.php");
    $id = $_GET['code'];    
    $req="select * from t_eleve where el_id=$id";
    $resultat = mysqli_query($conn,$req) or die(mysqli_error());
    $etudiant = mysqli_fetch_assoc($resultat);
 ?>
 <html>
  <link rel="stylesheet" type="text/css" href="style.css">
 <body>
    <ul>
        <li><a href='accueil.php'> Retour</a></li>
    </ul>
    <div>
        <h1><span>Changer les informations d'un élève</span></h1>
        <form method="post" action="modifier.php">
        <p><label style="color: black">SON NUMERO :</label>  
        <p><input type="text" name="numero" value="<?php echo ($etudiant['el_id']); ?>" readonly></p>    
        <p><label style="color: black">NOM :</label>  
        <p><input type="text" name="nom" value="<?php echo ($etudiant['el_nom']); ?>"></p>
        <p> <label style="color: black">PRENOM :</label>  
        <p><input type="text" name="prenom" value="<?php echo ($etudiant['el_prenom']); ?>"></p>
        <p><label style="color: black">DATE DE NAISSANCE :</label>
        <p><input type="date" name='dates' value="<?php echo ($etudiant['el_ddn']); ?>"></p>
        <p><label style="color: black">SEXE :</label>   </p>
        <select name="sexe">
            <option value="<?php echo ($etudiant['el_sexe']); ?>"><?php 
            if ($etudiant['el_sexe'] = 'H') {
                echo "Femme";
                $contraire = "H";
            }
            else {
                echo "Homme";
                $contraire = "F";
            }
            ?></option>
            <option value="<?php echo ($contraire); ?>"><?php 
            if ($contraire = 'F') {
                echo "Homme";
            }
            else {
                echo "Homme";
            }
            ?></option>
        </select></p>
        <p><label style="color: black">ADDRESSE EMAIL :</label>   
        <p><input type="email" name="email" value="<?php echo ($etudiant['el_email']); ?>"></p>
        <p><label style="color: black">DIPLOME :</label>  </p>
        <select name="diplome" required>
            <option value="A2">Serie A2</option>
            <option value="D">D</option>
            <option value="C">C</option>   
        </select></p>
        <p><label style="color: black">OPTION :</label>  </p>
        <select name="options" required>
            <option value="DEV">intégration et développement</option>
            <option value="RSI">réseaux et systèmes </option>
        </select></p>
        <p><input type="submit" value="envoyer mes informations"></p>
    </div>
    </form> 
    <form method="post" action="delete.php">
        <div>
            <p><label>Son Numero</label> : 
            <p><input type="text" name="numero2" value="<?php echo ($etudiant['el_id']); ?>" readonly></p>
            <h1><span>Supprimer un élève : </span></h1>
            <p><input type="submit" value="Confirmer"></p>
        </div>
    </form>
 </body>
 </html>