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
              <p><input type="submit" value="envoyer mes informations"></p>
          </form>
    </div>

</body>
</body>
</html>