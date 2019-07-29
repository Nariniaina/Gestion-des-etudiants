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
    <title>Accueil</title>
</head>
<body>
    <ul>
        <li><a href='accueil.php'> Accueil</a></li>
        <li><a href='register.php'> S'inscrire</a></li>
        <li><a href='filtre.php'> Filtrage des élèves </a></li>
        <li><a href='info.php'> Information sur un élèves </a></li>
        <li><a href='listefinal.php'> Listes des élèves </a></li>
        <span style="float: right;" style="color: white;"> <li><a href='gestion.php'>|&nbsp&nbsp&nbspApplication&nbsp&nbsp&nbsp|</a></li>
        </span>
        <span style="float: right; color: white; padding: 13px;" style="color: white;"><?php echo "Bienvenue, ";echo $_SESSION['username']; ?></span>
    </ul>
    <span style="float: right">
        <form method="post" action="logout.php">
            <p><button class="button button3">Se déconnecter</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
        </form>
    </span>
    <div>
        <h1><span>Remplir les informations un élève</span></h1>
        <form method="post" action="traitement.php">
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
</body>
</html>