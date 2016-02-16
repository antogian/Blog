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

<div id='main'>
<h1>Δημιουργία Λογαριασμού</h1>";
	
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = mysql_real_escape_string($_POST["email"]);
	$username = $_POST["username"];
	$password = $_POST["password"];
	$password2 = $_POST["password2"];
	
	if($username!=NULL && $password!=NULL && $password2!=NULL && $firstname!=NULL && $lastname!=NULL && $email!=NULL)
	{
		if($password == $password2)
		{
			mysql_query("INSERT INTO users (username, password, email, firstname, lastname) VALUES ('$username', SHA1('$password'), '$email', '$firstname', '$lastname')") or die(mysql_error());
			echo "Ο λογαριασμος σας δημιουργήθηκε!";
			$connected = 1;
			session_start();
			$_SESSION["user"] = $username;
			header("Location: index.php?connected=".$connected);
		}
		else
			echo "Πληκτρολογήσατε λάθος κωδικό!";
	}
	else
		echo "Συμπληρώστε όλα τα πεδία!";
		
echo"</div>

</body>
</html>";

?>