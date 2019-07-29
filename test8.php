<?php 
	require_once("conn.php");
	$req = "select * from t_classe";
    $rs = mysqli_query($conn,$req) or die(mysqli_error());
    $option = NULL;
	while($row = mysqli_fetch_assoc($rs))
		{
		  $option .= '<option value = "'.$row['cla_id'].'">'.$row['cla_nom'].'</option>';
		}
	?>
<html>
<body>
<form>
	<p>
        <select> 
            <option value = "<?php while($row = mysqli_fetch_assoc($rs))
		{
		  $option .= '<option value = "'.$row['cla_id'].'">'.$row['cla_nom'].'</option>';
		}  ?>" name="numero"><?php echo $option; ?></option>
        </select>
    </p>
</form>
</body>
</html>