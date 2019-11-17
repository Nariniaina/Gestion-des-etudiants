<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: index3.php");
exit(); }
?>