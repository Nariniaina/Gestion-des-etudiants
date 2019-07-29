<?php 
    include("auth.php");
    require_once("conn.php");
    $rs = mysqli_query($conn,"select * from t_eleve") or die(mysqli_error());
    $option = NULL;
    $optionel = NULL;
    ?>  
<?php 
    require_once("conn.php");
    $rs2 = mysqli_query($conn,"select * from t_classe") or die(mysqli_error());
    $option2 = NULL;
    $optioncla = NULL;
    ?>
<?php while($row = mysqli_fetch_assoc($rs))
        {
          $option .= $row['el_id'];
          $optionel .= $row['el_nom'];
        }  ?>
<?php while($row = mysqli_fetch_assoc($rs2))
        {
          $option2 .= $row['cla_id'];
          $optioncla .= $row['cla_nom'];
        }  ?>
<?php 
	echo "$option";
	echo "$optionel";
	echo "$option2";
	echo "$optioncla";
 ?>