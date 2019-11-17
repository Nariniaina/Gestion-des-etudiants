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
      <h1><label style="color: white">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRemplir les informations sur vous</h1> 
  <div>
    <div class="login">
      <form method="post" action="login.php">
              <h4><label style="color: rgb(96, 101, 95); font-size: 40px;">&nbsp&nbsp&nbsp&nbspLogin</h4>  
              <p><input type="text" name="username" required style="
                        width: 100%;
                        padding: 12px 12px;
                        margin: 0px 0px;
                        display: inline-block;
                        border-radius: 10px;
                        box-sizing: border-box;" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>"></input></p>
              <p><input type="password" name="password" required style="
                        width: 100%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border-radius: 10px;
                        box-sizing: border-box;" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>"></input></p>
              <input type="checkbox" name="remember"> <span style="color: rgb(96, 101, 95);">Remember me</span><br><br>
              <p><button class="buttons button5" name="login">Confirmer</button>
              <span>
              <?php
                if (isset($_SESSION['message'])){
                  echo $_SESSION['message'];
                }
                unset($_SESSION['message']);
              ?>
              </span>
          </form>
      <div>
    </div>
  </div>
  <div>
         <form method="post" action="traitement1.php" class="">
              <p><label style="color: white">Nom :</label>
              <p><input type="text" name="nom" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border-radius: 40px;
                        box-sizing: border-box;"></p>
              <p> <label style="color: white">Prenom :</label>  
              <p><input type="text" name="prenom" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border-radius: 40px;
                        box-sizing: border-box;"></p>
              <p><label style="color: white">Date de naissance :</label>
              <p><input type="date" name='dates' required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border-radius: 40px;
                        box-sizing: border-box;"></p>
              <p><label style="color: white">Sexe :</label>   </p>
              <select name="sexe" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border-radius: 40px;
                        box-sizing: border-box;">
                  <option value="H">Homme</option>
                  <option value="F">Femme</option>
              </select></p>
              <p><label style="color: white">Adresse email :</label>   
              <p><input type="email" name="email" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border-radius: 40px;
                        box-sizing: border-box;"></p>
              <p><label style="color: white">Diplome :</label>  </p>
              <select name="diplome" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border-radius: 40px;
                        box-sizing: border-box;">
                  <option value="A2">Serie A2</option>
                  <option value="D">D</option>
                  <option value="C">C</option>   
              </select></p>
              <p><label style="color: white" style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border-radius: 40px;
                        box-sizing: border-box;">Option :</label>  </p>
              <select name="options" required style="
                        width: 40%;
                        padding: 12px 20px;
                        margin: 0px 0px;
                        display: inline-block;
                        border-radius: 40px;
                        box-sizing: border-box;">
                  <option value="DEV">intégration et développement</option>
                  <option value="RSI">réseaux et systèmes </option>
              </select></p>
              <br>
              <p><button class="buttons1 button5">Envoyer mes informations</button>
          </form>
    </div>

</body>
</body>
</html>