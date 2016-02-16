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
	echo"<h1>Συνδεθείτε στο Λογαριασμό σας</h1>
    <form method='post' action='LoginSubmit.php'>
		<table width='510' border='0'>
		<tr>
		<td>Όνομα χρήστη: </td>
		<td><input type='text' name='username' id='username'/></td>
		</tr>
		<tr>
		<td>Κωδικός πρόσβασης: </td>
		<td><input type='password' name='password' id='password'/></td>
		</tr>
		<tr>
		<td></br></br></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td><input type='submit' value='Σύνδεση' /></td>
		</tr>
		</table>
    </form>";
echo "<footer id='foot01'></footer>
</div>

</body>
</html>";
?>