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
    <title>Application</title>
</head>
<body>
    <span>
        <ul style="background-color: MediumSeaGreen; list-style-type: none; overflow: hidden;">
            <li style="float: left;"><a href='accueil.php'> Accueil</a></li>
            <li style="float: left;"><a href='gestion.php'> Application</a></li>
        </ul>
    </span>
    <div>
        <h1><span>Liste des activités :</span></h1>
        <span style="font-size: 20px;">Gestion quotidienne :</span>
        <br>
        <tr>
            <td>
                <span style="float: left" >
                    <form method="post" action="retard.php">
                        <p><button class="button button3">Retard</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    </form>
                </span>    
            </td>
            <td>
                <span style="float: left">
                    <form method="post" action="absence.php">
                        <p><button class="button button3">Absence</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    </form>
                </span>    
            </td>
        </tr>
        <br></br>
        <br></br>
        <br></br>
        <span style="font-size: 20px;">Gestion interne :</span>
        <br>
        <tr>
            <td>
                <span style="float: left">
                    <form method="post" action="classe.php">
                        <p><button class="button button3">Répartition des classes</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    </form>
                </span>    
            </td>
            <td>
                <span style="float: left">
                    <form method="post" action="matiere.php">
                        <p><button class="button button3">Répartition des Matières</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    </form>
                </span>    
            </td>
            <td>
                <span style="float: left">
                    <form method="post" action="salle.php">
                        <p><button class="button button3">Répartition des salles</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    </form>
                </span>    
            </td>
            <td>
                <span style="float: left">
                    <form method="post" action="gest_temps.php">
                        <p><button class="button button3">Gestion de l'emploie du temps</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    </form>
                </span>    
            </td>
        </tr>
        <br></br>
        <br></br>
        <br></br>
        <span style="font-size: 20px;">Gestion des activités :</span>
        <br>
        <tr>
            <td>
                <span style="float: left">
                    <form method="post" action="examen.php">
                        <p><button class="button button3">Programmer un examen</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                    </form>
                </span>    
            </td>
        </tr>
        <br></br>
        <br></br>
        <br></br>
        </form>
    </div>
</body>
</html>