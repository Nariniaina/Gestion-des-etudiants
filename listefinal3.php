<?php
	include('conn.php');
	$query=mysqli_query($conn,"select count(el_id) as total from `t_eleve`");
	$row=mysqli_fetch_array($query);
?>
<?php echo $row['total']; 

?>
