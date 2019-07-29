<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>home</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="particles-js">
  <form method="POST" action="login.php">
    <h1 style="color: white; ">Remplir les informations sur vous</h1>
    <div id="particle-canvas">
        <span  style="float: right">
        <h1 style="color: white">Login</h1><br></br>
		<label style="color: white">Username :</label> <input type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username"><br><br>
		<label style="color: white">Password :</label> <input type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password"><br><br>
		<input type="checkbox" name="remember"> <span style="color: white">Remember me</span><br><br>
		<input type="submit" value="S'inscrire" name="login">
		<br></br>
		<span>
            <?php
            if (isset($_SESSION['message'])){
              echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
          ?>
        </span> 
    </div>
   </form>
   <form method="post" action="traitement1.php">
        <p><label style="color: white">NOM :</label>  
        <p><input type="text" name="nom" required></p>
        <p> <label style="color: white">PRENOM</label> : 
        <p><input type="text" name="prenom" required></p>
        <p><label style="color: white">DATE DE NAISSANCE</label> : 
        <p><input type="date" name='dates' required></p>
        <p><label style="color: white">ADDRESSE EMAIL</label> :  
        <p><input type="email" name="email" required></p>
        <p><label style="color: white">DIPLOME </label> : </p>
        <select name="diplome" required>
            <option value="A2">Serie A2</option>
            <option value="D">D</option>
            <option value="C">C</option>   
        </select></p>
        <p><label style="color: white">FILIAIRE</label> : </p>
        <select name="options" required>
            <option value="DEV">intégration et développement</option>
            <option value="RSI">réseaux et systèmes </option>
        </select></p>
        <p><input type="submit" value="envoyer mes informations"></p>
    </div>
    </form>
</div>

<!-- scripts -->
<script src="particles.js"></script>
<script src="js/app.js"></script>

<!-- stats.js -->
<script src="js/lib/stats.js"></script>
</body>
</body>
</html>