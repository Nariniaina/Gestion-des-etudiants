<?php
    session_start();
    require_once("conn.php");
    $code = $_GET['code'];
?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title></title>
</head>
<body>
	<form method="post" action="traitement15.php">
		<div>
			<br><h1 style="text-align: center;"><span>Note attribuer à l'élève :</span></h1>
			<p style="text-align: center;"><input type="hidden" type="text" name="id" value="<?php echo ($code); ?>" readonly></p>
			<p style="text-align: center;"><label style="color: black">NOTE A ATTRIBUER :</label>  
			<p style="text-align: center;"><input type="number" name="note" required></p>
			<p style="text-align: center;"><input type="submit" value="CONFIRMER"></p>
		</div>
	</form>
</body>
</html>