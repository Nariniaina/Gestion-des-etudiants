<?php
    include("auth.php");
	include('conn.php');
	{$id=$_POST['numero2'];
	mysqli_query($conn,"delete from `t_eleve` where el_id='$id'");
	}
?>
<?php 
header('location:info.php');?>