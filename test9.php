<?php 
	require_once("conn.php");
    $rs = mysqli_query($conn,"select * from t_eleve") or die(mysqli_error());
    $rs2 = mysqli_query($conn,"select * from t_classe") or die(mysqli_error());
    $option = NULL;
    $option2 = NULL;
    while($row = mysqli_fetch_assoc($rs))
		{
		  $option .= '<option value = "'.$row['el_id'].'">'.$row['el_nom'].'</option>';
		}  
	while($row = mysqli_fetch_assoc($rs2))
		{
		  $option2 .= '<option value = "'.$row['cla_id'].'">'.$row['cla_nom'].'</option>';
		}
?>	
<?php 
	require_once("conn.php");
    $rs2 = mysqli_query($conn,"select * from t_classe") or die(mysqli_error());
    $option2 = NULL;
?>	
<html>
<body>
<form method="post" action="test10.php">
	<p>
        <select> 
            <option value = "<?php echo $option; ?>" name="numero"></option>
        </select>
    </p>
    <p>
        <select> 
            <option value = "" name="classe"><?php echo $option2; ?></option>
        </select>
    </p>
    <p><input type="submit" value="CONFIRMER"></p>
</form>
</body>
</html>