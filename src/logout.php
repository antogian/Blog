<?php
	include("Connection.php");
	
	session_start();
	
	$username = $_SESSION["user"];
	$logout = date("Y-m-d H:i:s");
	mysql_query("UPDATE users SET logout='$logout' WHERE username='$username'") or die(mysql_error());
	
	session_destroy();
	
	Header("Location: index.php?");
?>