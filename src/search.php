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

<div id='main'>
<h1>Αναζήτηση</h1>";
	$keyword = $_GET["keyword"];
	
	if(strlen($keyword) == 0)
	{
		echo "Παρακαλώ πληκτρολογήστε τη λέξη ή τη φράση που θέλετε να αναζητήσετε!";
	}
	else if (strlen($keyword) > 0)
	{
		echo "<h3>Αποτελέσματα αναζήτησης για  <font color='red'>".$keyword."</font></h3></br>";
		$query = "SELECT * FROM files WHERE description LIKE '%$keyword%' OR title LIKE '%$keyword%'";
		$run = mysql_query($query) or die(mysql_error());
		$count = mysql_num_rows($run);
		if($count == 0)
		{
			echo "Δεν βρέθηκαν αποτελέσματα";
		}
		else
		{
			while($file_row = mysql_fetch_array($run))
			{
				echo "<p>";
				echo "<h3>".$file_row["title"]."</h3>";
				echo $file_row["description"];
				echo "<br />";
				echo "<a href='".$file_row["path"]."'> Διαβάστε περισσότερα </a>";
				echo "</p>";
			}
		}
	}
echo "<footer id='foot01'></footer>
</div>

</body>
</html>";

?>