<?php
	include("Connection.php");
	
	session_start();
	
echo"<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title>Game Reviews</title>
  <link rel='stylesheet' type='text/css' href='style.css' />
</head>

<body>
  <table id='consoles'>
	<tr>
		<td>PC</td><td>PS4</td><td>XBOX ONE</td><td>Wii U</td><td>PS3</td><td>XBOX 360</td><td>PS VITA</td><td>MAC</td><td>ANDROID</td><td>IOS</td>
	</tr>
  </table>
  <img id='static' src='gamer.jpg' width='1200px' height='500px'>
  <!--<nav id='nav01'></nav>-->
<div id='toolbar'>";
		if(isset($_SESSION["user"]))
			echo "<a href='logout.php' id='login'>Logout</a>
					<a href='profile.php' id='register'>Profile</a>";
		else 
			echo "<a href='login.php' id='login'>Login</a>
					<a href='register.php' id='register'>Register</a>";
		echo "<form action='search.php' method='GET'>
			<input type='text' id='search' name='keyword' placeholder=' Search...' />
			<input type='image' id='searchbutton' name='submit'src='search.png'/><br /><br />
			</form>
</div>
<nav id='cssmenu'>
	<ul>
		<li><a href='index.php'>Home</a></li>
		<li><a href='news.php'>News</a></li>
		<li><a href='tributes.php'>Αφιερώματα</a></li>
		<li><a href='reviews.php'>Reviews</a></li>
		<li><a href='about.php'>About</a></li>
		<li><a href='contact.php'>Contact</a></li>
	</ul>
</nav>

<div id='main'>";
	
	if (isset($_POST['submit']))
	{	 
			echo "Uploading...<br /><br />";
				$Title = $_POST["Title"];
				$Description = $_POST["Description"];
				$Category = $_POST["Category"];
				$Path = addslashes("Uploads/".$_POST["Path"]);
				$Created = date("Y-m-d H:i:s");
		 
				$query = "INSERT INTO `files` (title, description, category, path, created) VALUES ('".$Title."', '".$Description."', '".$Category."', '".$Path."', '".$Created."')";
				mysql_query($query) or die(mysql_error());
				echo "Μια νέα ανάρτηση μόλις δημιουργήθηκε.<br /><br />";
	}
	echo "<a href='uploadFile.php'>Επιστροφή</a>";
	echo"</div>

</body>
</html>";

?>