<?php
  include("auth.php");
  include('conn.php');
?>
<ul>
	<li><a href='accueil.php'> Accueil</a></li>
    <li><a href='register2.php'> S'inscrire</a></li>
    <li><a href='filtre.php'> Filtrage des élèves </a></li>
    <li><a href='info.php'> Information sur un élèves </a></li>
    <li><a href='listefinal.php'> Listes des élèves </a></li>
</ul>
<link rel="stylesheet" type="text/css" href="style.css">
<form method="post" action="update.php">
    <div>
        <p><label>Son Numero</label> : 
        <p><input type="text" name="numero" required></p>
        <h1><span>Changer les données d'un élèves : </span></h1>
        <p><label style="color: black">NOM :</label>
        <p><input type="text" name="nom" required></p>
        <p> <label style="color: black">PRENOM :</label>  
        <p><input type="text" name="prenom" required></p>
        <p><label style="color: black">DATE DE NAISSANCE :</label>
        <p><input type="date" name='dates' required></p>
        <p><label style="color: black">SEXE :</label>   </p>
        <select name="sexe" required>
            <option value="H">Homme</option>
            <option value="F">Femme</option>
        </select></p>
        <p><label style="color: black">ADDRESSE EMAIL :</label>   
        <p><input type="email" name="email" required></p>
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
        <p><input type="text" name="numero2" required></p>
        <h1><span>Supprimer un élève : </span></h1>
        <p><input type="submit" value="Confirmer"></p>
    </div>
</form>