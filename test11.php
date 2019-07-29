<?php 
    require_once("conn.php");
    $rs2 = mysqli_query($conn,"select * from t_classe") or die(mysqli_error());
    $option2 = NULL;
    $option3 = NULL;
    ?>
<?php while($row = mysqli_fetch_assoc($rs2))
        {
          $option2 .= ''.$row['cla_id'].'';
        }  
?>
<?php while($row1 = mysqli_fetch_assoc($rs2))
        {
          $option3 .= ''.$row1['cla_nom'].'';
        }  
?>
<?php 
	echo "$option2";
	echo "$option3";
 ?>