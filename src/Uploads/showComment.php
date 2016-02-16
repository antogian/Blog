<?php	
	
	$sql = "SELECT name, comment FROM comments WHERE fid='$fid' ORDER BY created";
	//$filename = $_SERVER["PHP_SELF"];
	
	while ($row = mysql_fetch_array(mysql_query($sql) or die(mysql_error()))
	{
		echo '<tr><td><h3>'.$row["name"].'</h3></td></tr>';
		echo '<tr><td>'.$row['comment'].'</td></tr>';
	}
?>