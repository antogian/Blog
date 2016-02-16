<?php
	include("../Connection.php");
	
	session_start();
	
	$filename = $_SERVER["PHP_SELF"];

	if(isset($_POST["submit"]))
	{
		include("insertComment.php");
		unset($_POST["submit"]);
		header("Location:".$filename);
	}
echo"<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title>Game Reviews</title>
  <link rel='stylesheet' type='text/css' href='../style.css' />
</head>

<body>
  <table id='consoles'>
	<tr>
		<td>PC</td><td>PS4</td><td>XBOX ONE</td><td>Wii U</td><td>PS3</td><td>XBOX 360</td><td>PS VITA</td><td>MAC</td><td>ANDROID</td><td>IOS</td>
	</tr>
  </table>
  <img id='static' src='../gamer.jpg' width='1200px' height='500px'>
  <!--<nav id='nav01'></nav>-->
<div id='toolbar'>";
		if(isset($_SESSION["user"]))
			echo "<a href='../logout.php' id='login'>Logout</a>
					<a href='../profile.php' id='register'>Profile</a>";
		else 
			echo "<a href='../login.php' id='login'>Login</a>
					<a href='../register.php' id='register'>Register</a>";
		echo "<form action='../search.php' method='GET'>
			<input type='text' id='search' name='keyword' placeholder=' Search...' />
			<input type='image' id='searchbutton' name='submit'src='../search.png'/><br /><br />
			</form>
</div>
<nav id='cssmenu'>
	<ul>
		<li><a href='../index.php'>Home</a></li>
		<li><a href='../news.php'>News</a></li>
		<li><a href='../tributes.php'>Αφιερώματα</a></li>
		<li><a href='../reviews.php'>Reviews</a></li>
		<li><a href='../about.php'>About</a></li>
		<li><a href='../contact.php'>Contact</a></li>
	</ul>
</nav>

<div id='main'>
	<h1>Απεβίωσε ο Ralph Baer, ο κατά πολλούς «πατέρας των βιντεοπαιχνιδιών»</h1>
	<p>
		<img src='ralphbaer.jpg' width='850px' height='500px'>
	</p>
	<p>
		Φτωχότερη είναι σήμερα η βιομηχανία των βιντεοπαιχνιδιών, αφού όπως έγινε γνωστό, ο Ralph Baer έφυγε από τη ζωή σε ηλικία 92 ετών.
	</p>
	<p>
		Ο κατά πολλούς 'πατέρας των βιντεοπαιχνιδιών', έγραψε τη δική του ιστορία στο χώρο παρουσιάζοντας την πρώτη κονσόλα παιχνιδιών η οποία είχε<br /> 
		αρχικά την ονομασία Brown Box αλλά στη συνέχεια με την εμπορική της κυκλοφορία, απέκτησε την ονομασία Magnavox Odyssey. Η συγκεκριμένη κονσόλα <br /> 
		θεωρείται ότι έθεσε τα θεμέλια για ολόκληρη τη βιομηχανία των video games όπως τη γνωρίζουμε σήμερα. Ακόμη ο Baer δημιούργησε και το πρώτο<br /> 
		περιφερειακό για κονσόλα, ένα light gun το οποίο συνόδευε ένα παιχνίδι σκοποβολής καθώς και το δημοφιλές παιχνίδι Simon.
	</p>
	<p>
		Καθ'όλη τη διάρκεια της ζωής του, ο Baer είχε αναγνωριστεί για τα επιτεύγματα της καριέρας του, αποσπώντας το Εθνικό Μετάλλιο Τεχνολογίας από<br /> 
		τον τότε Πρόεδρο των Ηνωμένων Πολιτειών George W. Bush κάτι που τον έκανε μέλος του Hall Of Fame των Εθνικών Εφευρετών. Το 2008 έλαβε το<br /> 
		βραβείο Game Developers Choice Pioneer απ' όπου και το παρακάτω βίντεο δηλώνοντας μάλιστα ότι «εκτιμώ την τιμή και κατασκευάζω ακόμα διάφορα<br /> 
		πράγματα. Σας χαιρετώ».
	</p>
	<p>
		<a href='http://www.insomnia.gr/_/articles/games/games/%CE%B1%CF%80%CE%B5%CE%B2%CE%AF%CF%89%CF%83%CE%B5-%CE%BF-ralph-baer-%CE%BF-%CE%BA%CE%B1%CF%84%CE%AC-%CF%80%CE%BF%CE%BB%CE%BB%CE%BF%CF%8D%CF%82-%C2%AB%CF%80%CE%B1%CF%84%CE%AD%CF%81%CE%B1%CF%82-r8051http://www.insomnia.gr/_/articles/games/games/%CE%B1%CF%80%CE%B5%CE%B2%CE%AF%CF%89%CF%83%CE%B5-%CE%BF-ralph-baer-%CE%BF-%CE%BA%CE%B1%CF%84%CE%AC-%CF%80%CE%BF%CE%BB%CE%BB%CE%BF%CF%8D%CF%82-%C2%AB%CF%80%CE%B1%CF%84%CE%AD%CF%81%CE%B1%CF%82-r8051'>Πηγή</a>
	</p>";
	$path = "Uploads/".basename($_SERVER["PHP_SELF"]);
	$sql = mysql_query("SELECT fid FROM files WHERE path='$path'") or die(mysql_error());
	$file_row = mysql_fetch_array($sql);
	$fid = $file_row["fid"];
	$name = $_SESSION["user"];
	
	if(isset($_SESSION["user"]))
	{
		echo"
		<form action='$filename' method='POST'>
		<table>
			<tr><td colspan='2'>Σχόλιο: </td></tr>
			<tr><td colspan='2'><input type='hidden' name='name' value='$name'></td></tr>
			<tr><td colspan='5'><textarea name='comment' rows='10' cols='50'></textarea></td></tr>
			<tr><td colspan='2'><input type='hidden' name='fid' value='$fid'></td></tr>
			<tr><td colspan='2'><input type='submit' name='submit' value='Υποβολή'></td></tr>
		</table>
		</form>";
	}
	$sql = mysql_query("SELECT * FROM comments WHERE fid='$fid' ORDER BY created DESC");
	echo"<table>";
	while ($row = mysql_fetch_array($sql))
	{
		echo "<tr><td><h3>".$row["name"]."</h3></td></tr>";
		echo "<tr><td>".$row["comment"]."</td></tr>";
	}
	echo"<footer id='foot01'></footer>
	</table>
</div>
</body>
</html>";
?>