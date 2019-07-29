<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="acc">
      <h1><label style="color: #cccccc">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRemplir les informations sur vous</h1> 
  <div>
    <div class="login">
      <form method="post" action="traitement1.php">
              <h1><label style="color: white">LOGIN</h1>  
              <p><label style="color: white">NOM :</label>  
              <p><input type="text" name="nom" required style="
                        width: 100%;
                        padding: 12px 12px;
                        margin: 0px 0px;
                        display: inline-block;
                        border: 3px solid #cccccc;
                        border-radius: 70px;
                        box-sizing: border-box;"></p>
              <p> <label style="color: white">PRENOM :</label>  
              <p><input type="text" name="prenom" required style="
                        width: 100%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border: 3px solid #cccccc;
                        border-radius: 70px;
                        box-sizing: border-box;"></p>
              <p><input type="submit" value="envoyer mes informations" style="
                        border-radius: 70px; width: 100%;
                        color: white;
                        padding: 14px 20px;
                        border: 3px solid #cccccc;
                        margin: 8px 0;"></p>
          </form>
      <div>
    </div>
  </div>
  <div>
         <form method="post" action="traitement1.php" class="">
              <p><label style="color: #cccccc">NOM :</label>  
              <p><input type="text" name="nom" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border: 3px solid #cccccc;
                        border-radius: 4px;
                        box-sizing: border-box;"></p>
              <p> <label style="color: #cccccc">PRENOM :</label>  
              <p><input type="text" name="prenom" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border: 3px solid #cccccc;
                        border-radius: 4px;
                        box-sizing: border-box;"></p>
              <p><label style="color: #cccccc">DATE DE NAISSANCE :</label>
              <p><input type="date" name='dates' required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border: 3px solid #cccccc;
                        border-radius: 4px;
                        box-sizing: border-box;"></p>
              <p><label style="color: #cccccc">SEXE :</label>   </p>
              <select name="sexe" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border: 3px solid #cccccc;
                        border-radius: 4px;
                        box-sizing: border-box;">
                  <option value="H">Homme</option>
                  <option value="F">Femme</option>
              </select></p>
              <p><label style="color: #cccccc">ADDRESSE EMAIL :</label>   
              <p><input type="email" name="email" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border: 3px solid #cccccc;
                        border-radius: 4px;
                        box-sizing: border-box;"></p>
              <p><label style="color: #cccccc">DIPLOME :</label>  </p>
              <select name="diplome" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border: 3px solid #cccccc;
                        border-radius: 4px;
                        box-sizing: border-box;">
                  <option value="A2">Serie A2</option>
                  <option value="D">D</option>
                  <option value="C">C</option>   
              </select></p>
              <p><label style="color: #cccccc" style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border: 3px solid #cccccc;
                        border-radius: 4px;
                        box-sizing: border-box;">OPTION :</label>  </p>
              <select name="options" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border: 3px solid #cccccc;
                        border-radius: 4px;
                        box-sizing: border-box;">
                  <option value="DEV">intégration et développement</option>
                  <option value="RSI">réseaux et systèmes </option>
              </select></p>
              <br>
              <p><input type="submit" value="envoyer mes informations" style="border-radius: 7px;
              border: 3px solid #cccccc;"></p>
          </form>
    </div>

</body>
</body>
</html>