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
  <title>Life is a Game!</title>
  <link rel='stylesheet' type='text/css' href='../style.css' />
</head>

<body>
  <table id='consoles'>
	<tr>
		<td>PC</td><td>PS4</td><td>XBOX ONE</td><td>Wii U</td><td>PS3</td><td>XBOX 360</td><td>PS VITA</td><td>MAC</td><td>ANDROID</td><td>IOS</td>
	</tr>
  </table>
  <img id='static' src='../gamer.jpg' width='1200px' height='500px'>
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
<h1>Η ιστορία των 3D γραφικών</h1>
<h3>Μία σύντομη αναδρομή στην ιστορία των γραφικών και τις μηχανές τους.</h3>
<p><img src='3Dhistory.png' width='850px' height='450px'></p>
<p>
	Έχουν περάσει 56 χρόνια από την πρώτη προσπάθεια για δημιουργία ενός video game με χρήση δισδιάστατων γραφικών. Η τεχνολογία μέσα σε αυτό τον μισό αιώνα έκανε τεράστια άλματα
	σε όλους τους σχετικούς τομείς, με αποτέλεσμα, το πρόσωπο του video gaming να έχει αλλάξει τόσο δραματικά που να μοιάζει πια με ένα τελείως νέο πεδίο της βιομηχανίας. Η πραγματικότητα
	όμως είναι ότι όλα ξεκίνησαν με 1 φωτεινό τετραγωνάκι.
</p>
<p>
	Το 1958, ο William Higinbotham, δημιούργησε το πρώτο διαδραστικό ηλεκτρονικό παιχνίδι που εξομοίωνε επιτυχώς φυσικούς νόμους. Το παιχνίδι αποκαλούνταν Tennis for Two και δημιουργήθηκε για
	να έχουν τη δυνατότητα οι επισκέπτες του Brookhaven National Laboratory να απασχοληθούν με κάτι, καθώς περίμεναν τα αποτελέσματα των πειραμάτων. Οι χρήστες μπορούσαν να δουν την τροχιά
	μίας μπάλας τένις καθώς χτύπαγε το δίχτυ ή το δάπεδο και να αλληλεπιδράσουν με αυτήν με ένα απλό χειριστήριο.
</p>
<p>
	Δεκατέσσερα χρόνια μετά, το 1972, οι Bushnell και Dabney, δημιούργησαν το πρώτο multiplayer video game, γνωστό ως Pong. Το παιχνίδι αναπαριστά έναν αγώνα tennis ή ping pong δύο παιχτών,
	χρησιμοποιώντας δύο μπάρες για τις ρακέτες και ένα φωτεινό pixel για την μπάλα. Οι παίχτες μπορούν να μετακινούν πάνω ή κάτω τις ρακέτες για να αποκρούουν την μπάλα, αλλάζοντας κατά αυτόν τον
	τρόπο την πορεία της. Σκοπός του παιχνιδιού είναι να περάσει η μπάλα από την ρακέτα του αντιπάλου, έτσι ώστε να επιτευχθεί ένας πόντος.
</p>
<p>
	Τα γραφικά υπολογιστών όμως, είναι ένας τομέας ανεξάρτητος, αλλά ταυτόχρονα συνδεδεμένος με το gaming. Έτσι, το 1972 στο πανεπιστήμιο της Utah, δύο φοιτητές κατάφεραν να γυρίσουν ένα animated
	short film με τίτλο 'A Computer Animated Hand'. Το film έδειχνε το πρώτο 3D animation μοντέλο που δημιουργήθηκε ποτέ. Ήταν η προσομοίωση ενός ανθρώπινου χεριού, το οποίο μπορούσε να κινεί τα
	δάκτυλα του όπως και ένας άνθρωπος. Αυτός είναι ο λόγος που σήμερα έχουμε όλα αυτά τα 3D games και animation movies που τόσο λατρεύουμε.
</p>
<p>
	Με την άφιξη της δεκαετίας του '90 τα 3D γραφικά απογειώθηκαν στη βιομηχανία των ηλεκτρονικών παιχνιδιών και μάλιστα άρχισαν να παράγονται μαζικά, με τη χρήση τυποποιημένων μηχανών γραφικών.
	Στα μέσα αυτής της τόσο δημιουργικής δεκαετίας, ο όρος game engine καθιερώθηκε, με αρχηγούς αυτής της επανάστασης τα first person shooter games, όπως το Doom και το Quake. Μετά την επιτυχία
	αυτών των παιχνιδιών, διάφοροι developers άρχισαν να αγοράζουν τα βασικά κομμάτια των παιχνιδιών και να προσθέτουν σε αυτά δικά τους μοντέλα, όπλα, χαρακτήρες και ιστορίες. Έτσι έγινε εμφανές
	ότι αυτός ο κεντρικός μηχανισμός θα μπορούσε να αναπτυχθεί και να πωληθεί ξεχωριστά από τα video games.
</p>
<p>
	Αυτό έγινε πραγματικότητα το 1998, με την Unreal Engine, η οποία προμήθευε την Epic Games με μεγαλύτερα ετήσια κέρδη από αυτά των video games που παρήγαγε. Βέβαια, αυτή η διαδικασία δεν ήταν
	τελείως άγνωστη στους developers, καθώς οι μηχανές γραφικών χρησιμοποιούνταν ήδη από την δεκαετία του '80, αλλά μόνο για 2D παιχνίδια. Αυτές οι μηχανές δεν έδιναν και πολύ ελευθερία στους
	developers, αφού διατηρούσαν τον βασικό μηχανισμό κλειδωμένο και επέτρεπαν αλλαγές μόνο στα γραφικά. Κάποιες από τις πρώτες τέτοιες μηχανές είναι οι Pinball Construction Set (1983),
	ASCII's War Game Construction Kit (1983), Adventure Construction Set (1984), Shoot'Em-Up Construction Kit (1987) και ASCII's RPG Maker (1988).
</p>
<p>
	Ακόμα και σήμερα οι πρωτοπόροι στην ανάπτυξη μηχανών γραφικών είναι τα Shooter games, δανείζοντας μάλιστα της μηχανές τους σε παιχνίδια άλλων genres. Για παράδειγμα, το Lineage II, ένα από
	τα κορυφαία MMORPG που ακόμα διατηρεί ένα αρκετά μεγάλο κοινό, είναι βασισμένο στην Unreal Engine, μία μηχανή που αναπτύχθηκε για τα Unreal shooter games. Άλλοι developers προτιμούν λιγότερο
	ισχυρές μηχανές, οι οποίες όμως είναι σχεδιασμένες ειδικά για το genre πάνω στο οποίο δουλεύουν, όπως οι developers του The Elder Scrolls III, ενός από τα πιο δημοφιλή A-RPG, το οποίο είναι
	βασισμένο στη Gamebryo engine, τη μηχανή που αναπτύχθηκε από την Gamebase για A-RPGs το 2008.
</p>
<p>
	Σήμερα έχουμε μία τεράστια ποικιλία από μηχανές γραφικών, οι οποίες είναι διαθέσιμες από εκατοντάδες διαφορετικές εταιρείες, όλες εξειδικευμένες σε κάποιον τομέα. Οι περισσότερες από αυτές
	απαιτούν άδεια χρήσης, αλλά υπάρχουν και κάποιες που κυκλοφορούν ελεύθερα στο διαδίκτυο, μερικές από αυτές μάλιστα είναι και open-source, που σημαίνει ότι όχι μόνο μπορούμε απλά να τις
	χρησιμοποιήσουμε δωρεάν, αλλά και να αλλάξουμε τον βασικό τους μηχανισμό όπως και όποτε θέλουμε. Κάθε developer ή development εταιρεία μπορεί πλέον να επιλέξει αν θα δημιουργήσει τη δική
	της μηχανή γραφικών ή αν θα πάρει μία έτοιμη. Αν επιλέξει την έτοιμη μπορεί εύκολα να επιλέξει ποια μηχανή θα αγοράσει ανάλογα με τις απαιτήσεις της.
</p>
<p>
	Κατά αυτόν τον τρόπο, πλέον οι developers μπορούν να αγοράσουν μία μηχανή γραφικών που θα παρέχει όλο τον μηχανισμό του παιχνιδιού έτοιμο και να αφιερώσουν όλον τον χρόνο τους στη δημιουργία
	καλύτερων γραφικών και ιστορίας, ειδικά αν η ανάπτυξη του μηχανισμού θα ήταν απλά μία βαρετή και τυποποιημένη διαδικασία για αυτούς. Αν όμως έχουν μία καινοτόμα ιδέα για τον μηχανισμό του
	παιχνιδιού, μπορούν να βασιστούν σε μία open-source μηχανή και να εισάγουν κατευθείαν τις καινοτομίες τους χωρίς να χάνουν χρόνο σε κώδικα που έχει ήδη γραφτεί.
</p>
<p>
	<a href='http://www.redbull.com/gr/el/games/stories/1331638144672/h-istoria-twn-3d-grafikwn'>Πηγή</a>
</p>
<br /><br />";

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