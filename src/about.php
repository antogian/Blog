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
<h1>Σχετικά με την εφαρμογή</h1>
<p>
	Η ιστοσελίδα υλοποιήθηκε στα πλαίσια του μαθήματος Προγραμματιστικές Εφαρμογές στο Διαδίκτυο. Το θέμα και η εκφώνηση<br /> 
	βρίσκονται παρακάτω.
</p>
<p>
	<h3>Εφαρμογή ιστολογίου</h3>
	
	Δύο χρήστες: Συγγραφέας και επισκέπτης. Ο συγγραφέας θα μπορεί να δημιουργεί αναρτήσεις ιστολογίου, οργανωμένες ανά<br /> 
	ημερομηνία και ανά θέμα και να προσθέτει σχόλια. Ο επισκέπτης θα μπορεί να σχολιάζει τις αναρτήσεις και να προσθέτει<br /> 
	κάποιες στα αγαπημένα του. Στο πάνελ του συγγραφέα θα εμφανίζονται τα νέα από την τελευταία φορά που συνδέθηκε, δηλαδή <br /> 
	ποια ήταν τα νέα σχόλια καθώς και πόσες προβολές είχαν τα άρθρα του.
</p>
";
  echo "<footer id='foot01'></footer>
</div>
</body>
</html>";

?>