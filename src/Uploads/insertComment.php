<?php
	include("Connection.php");
	
	$name = $_POST["name"];
	$comment = $_POST["comment"];
	$created = date("Y-m-d H:i:s");
	$submit = $_POST["submit"];
	
	$fid = $_POST["fid"];
	
	$updated = date("Y-m-d H:i:s");
	
	if($submit)
	{
		if($name && $comment && $fid)
		{
			mysql_query("INSERT INTO comments (name, comment, created, fid) VALUES ('$name', '$comment', '$created', '$fid')") or die(mysql_error());
			mysql_query("UPDATE files SET updated='$updated' WHERE fid='$fid'");
		}
		else
		{
			echo "Παρακαλώ συμπληρώστε το σχόλιό σας!";
		}
	}
?>