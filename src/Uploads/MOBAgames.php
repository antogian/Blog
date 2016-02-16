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
	<h1>Η έκρηξη των MOBA </h1>
	<h3>Tα δημοφιλέστερα Multiplayer Online Battle Arena games στην βιομηχανία των eSports.</h3>

	<p>
		<img src='moba1.jpg' width='850px' height='500px'>
	</p>
	<p>
		Η κουλτούρα των eSports έχει μεγαλώσει αρκετά σε όλο τον κόσμο, ακολουθώντας το πρότυπο της Νότιας Κορέας, στην οποία τα eSports είναι τρόπος ζωής. Σημαντική προσφορά σε αυτήν
		τη γιγάντωση των eSports στην Δύση, προσέφεραν τα παιχνίδια MOBA (Multiplayer Online Battle Arena) τα οποία αποτελούν πλέον τον κύριο πυλώνα όπου στηρίζεται η βιομηχανία
		των eSports παγκοσμίως. Τι είναι όμως τα MOBA και πώς ξεκίνησε η μόδα τους;
	</p>
		<p>
		<img src='moba2.jpg'>
	</p>
	<p>
		Τα παιχνίδια MOBA μπορούν να κατηγοριοποιηθούν ως ένα υποείδος των παιχνιδιών στρατηγικής (RTS- Real Time Strategy), καθώς ο στόχος των παικτών είναι ο ίδιος• να διαλύσουν τη βάση
		του αντιπάλου. Ο κάθε παίκτης ελέγχει έναν χαρακτήρα (Ήρωα/Champion), αλλά υπάρχουν και χαρακτήρες με τους οποίους ο παίκτης μπορεί να ελέγξει πάνω από ένα Unit. Στον κλασσικό
		χάρτη -αυτός που χρησιμοποιείται σε επίσημα τουρνουά- υπάρχουν τρεις λωρίδες, με τρεις πύργους, ο ένας σε μικρή απόσταση πίσω από τον άλλον, και όταν ξεκινάει το παιχνίδι, βγαίνουν
		αυτόματα NPC από την κάθε βάση και προχωρούν στις λωρίδες. Υποθέτοντας ότι δεν υπάρχει ήρωας στη λωρίδα, τα NPCs θα συναντηθούν στη μέση της και θα ξεκινούν να πολεμούν. Στόχος του
		παιχνιδιού είναι να διαλύσει η μία ομάδα τους πύργους της αντίπαλης και να αποκτήσει πρόσβαση στη βάση της. Μέσα στη βάση της υπάρχουν διάφορα κτίρια τα οποία είναι διαφορετικά σε κάθε
		ΜΟΒΑ αλλά ένα είναι κοινό: οι 2 τελικοί πύργοι και το 'κτίριο ζωής'. Όποια ομάδα καταστρέψει πρώτη το κτίριο ζωής της άλλης, είναι και αυτή που κερδίζει το παιχνίδι. Μέσα στον χάρτη
		υπάρχουν πολλοί στρατηγικοί στόχοι τους οποίους μπορεί να καταλάβει μια ομάδα για να μεγαλώσει τη δύναμή της και τα MOBA προσφέρουν μια πληθώρα από αντικείμενα στα εκάστοτε Shops ώστε
		ο κάθε παίκτης να εκπληρώνει ακριβώς τον ρόλο που επιθυμεί.
	</p>
	<p>
		<img src='moba3.jpg'>
	</p>
	<p>
		Το πρώτο MOBA, το οποίο εμφανίστηκε το 1998, ήρθε μαζί με το Starcraft και αποτελεί έναν Custom χάρτη του παιχνιδιού ο οποίος δημιουργήθηκε με το StarEdit (Toolkit με το οποίο κάποιος
		μπορεί να φτιάχνει δικούς του χάρτες στο Starcraft) και ονομάστηκε Aeon of Strife. Το 2002 η Blizzard κυκλοφόρησε το Warcraft 3 και μαζί με αυτό, το Warcraft 3 World editor. Εκείνη την
		περίοδο δημιουργήθηκε το DotA και μέχρι το 2008 έγινε ένα από τα δημοφιλέστερα παιχνίδια στον κόσμο
	</p>
	<p>
		Από εκεί και πέρα ξεκίνησε η επόμενη γενιά των MOBA που αυτή την στιγμή προσελκύουν απίστευτο αριθμό παικτών και έχουν κάνει τον όρο 'Επαγγελματίας Gamer', βιώσιμο. Τα δημοφιλέστερα
		εξ αυτών είναι το League of Legends (το δημοφιλέστερο παιχνίδι στον κόσμο με δεκάδες εκατομμύρια χρήστες μηνιαίως), το DotA 2 (η ανανεωμένη έκδοση του διάσημου MOBA, πλέον
		σε Standalone Version), το Heroes of Newerth, το Smite (το μόνο ΜΟΒΑ το οποίο είναι 3rd Person) και το πολυαναμενόμενο Heroes of the Storm το οποίο θα σημάνει την είσοδο της Blizzard στη
		σκηνή των MOBA.
	</p>
	<p>
		Το κάθε ένα από αυτά τα παιχνίδια έχει την ιδιαιτερότητά του, όμως όλα μαζί, ως γένος παιχνιδιών, έχουν προσφέρει υπέρογκα ποσά σε έπαθλα πρωταθλημάτων. Ενδεικτικά, το TI4 του DotA2 είχε
		συνολικά έπαθλα σχεδόν $11,000,000. Βλέποντας τέτοιους αριθμούς, το μέλλον μπορεί να φαίνεται μόνο εντυπωσιακό!
	</p>
	<p>
		<a href='http://www.redbull.com/gr/el/games/stories/1331691746597/moba-titloi'>Πηγή</a>
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
 