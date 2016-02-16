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
  <h1>The Art of Swordplay</h1>
  
  <h2>Όταν το Hack'n'Slash ανδρώθηκε...</h2>
  <p>Σαν εισαγωγή, για το συγκεκριμένο παιχνίδι, πρέπει να αναφέρουμε ότι πρόκειται για το γόνο</br>
  συνεργασίας του Hideo Kojima (Kojima Productions) και της Platinum Games (γνωστή από την ανάπτυξη</br>
  των εξαιρετικών Vanquish και Bayonetta) με γονίδια από το θρυλικό (όπως υποδεικνύει και το όνομα)</br>
  Metal Gear Solid.</p>
  <p>Μακριά από το genre του 'μπαμπά' MGS, το Metal Gear Rising κουβαλά, από το όνομα και μόνο,</br>
  βαρύ φορτίο στις πλάτες του και όπως θα αναλύσουμε ακολούθως, κατάφερε να σταθεί με αξιώσεις</br>
  στο ύψος των περιστάσεων.</p>
  <img src='Raiden-1m2.jpg' width='500px' height='300px'>
  
  <h2>Μία σονάτα πόνου</h2>
  <p>Ο πρωταγωνιστής Raiden, λιβεριανός, έζησε από κοντά την φρίκη του εμφυλίου σαν παιδί. Μεγαλωμένος</br>
  σαν παιδί-στρατιώτης από τον αδερφό του Solid, Solidus, έμαθε να χειρίζεται το σπαθί με επιδεξιότητα.</br>
  Για τον ίδιο (όπως και για πολλούς από εμάς) θεωρούσε το σπαθί ως ένα όπλο τιμής σε αντίθεση με τα </br>
  οπλοπολυβόλα. Σφυρηλατημένος στη μάχη πήρε το όνομα Jack the Ripper για τις απόλυτες, θανατηφόρες,</br>
  επιδόσεις του ανάμεσα στους ομοίους του. Μετά το πέρας του εμφυλίου, φεύγει στην Αμερική μέσω προγράμματος</br>
  για ορφανά. Έκει όμως θα υποβληθεί σε μία σειρά πειραματικών τεχνικών δημιουργίας cyborg που θα υπακούουν</br>
  τυφλά και θα ασπάζονται το αιματηρό παρελθόν με ζήλο. Ο Raiden ωστόσο απέρριψε το παρελθόν του.</br>
  Κάπως έτσι εμφανίζεται και στο MGR, σαν πρωταγωνιστής αυτή τη φορά.</p>
  <p>Εμφανίστηκε για πρώτη φορά στο MGS2: Sons of Liberty (για το PS2) σαν Rookie στην FOXHOUND.</br>
  Επανεμφανίζεται σαν support χαρακτήρας στο MGS4: Guns of the Patriots. Αξίζει να σημειωθεί ότι</br>
  από τους χαρακτήρες της original MGS σειράς είναι ο μόνος επιβεβαιωμένα ζωντανός χαρακτήρας, αφενός</br>
  διότι ο John, πατέρας του Solid, είναι νεκρός και ο ίδιος ο Solid δεν έχει δώσει σημεία ζωής.</br></p>
  <img src='Raiden-2.jpg' width='500px' height='300px'>
 
  <h2>Cut at Will!</h2>
  <p>Αυτό το μήνυμα είναι το πρώτο που προσέχει ο επίδοξος 'cyborg ninja' σαν πιάσει το κουτί του παιχνιδιού</br>
  στα χέρια του. Ξεκινώντας το παιχνίδι τα πάντα βαδίζουν πρόσω ολοταχώς. Εντύπωση κάνουν τα όμορφα</br>
  γραφικά, ανέξαρτητα με το αν έχουμε δει καλύτερα, για ένα Hack'n'Slash παιχνίδι.</p>
  <p>Το παιχνίδι ξεκινάει με ένα μικρής διάρκειας tutorial για τα απολύτως βασικά και σε βάζει αμέσως</br>
  στην πρίζα. Το πρώτο ουσιαστικά 'boss' (είναι εισαγωγικό άρα δεν πληρεί τις προδιαγραφές boss) είναι</br>
  ένα Metal Gear σε όλο του το μεγαλέιο. Η μάχη εκπληκτική, με ένα υπέροχα στημένο, σκηνοθετικά, τοπίο.</br>
  Η μουσική καταιγιστική. Το Metal κυριαρχεί αν και αρκετες φορές θα το συνοδεύσουν κάποια electro στοιχεία</br>
  χωρίς να χάνει όμως τον πολεμικό του χαρακτήρα. Τα animations απίθανα. Από που να αρχίσω και που να τελειώσω.</br>
  Η ταχύτητα του gameplay μόνιμα 'χτυπάει κόφτες', η αδρεναλίνη στο ζενίθ, η φάλαγγες των δαχτύλων να πονούν</br>
  και το χαρακτηριστικό 'skill' Zanda-tsu (το skill σε εισαγωγικά γιατί πρακτικά το Zandatsu είναι κομμάτι</br>
  των μηχανικών του gameplay) να κλέβει την παράσταση. Πρόκειται για ουσιαστικά για ένα slow motion πετσόκοψιμό</br>
  των πάντων (τανκς, ελικόπτερα, σώματα, μέλη κ.α.). Επικό!</p>
  <p>Αρκετά δύσκολο το σύστημα άμυνας του παιχνιδιού, ειδικά στις ταχύτητες που παίζεται. Βασικά, σαν άμυνα</br>
  χρησιμοποιείται το parry. Αριστερός αναλογικός προς την επίθεση του αντιπάλου σε συνδυασμό με το Χ. Βασικό</br>
  το timing. Θέλει προπόνηση και θάρρος...</br>
  Αργότερα γίνεται διαθέσιμο στα skills προς εκμάθηση το dodge. Όμως το parry είναι απαραίτητο και αναντικατάστατο.</br></p>
  <p>Γενικά το παιχνίδι έχει μία σχετικά ομαλή καμπύλη εκμάθησης με μερικές όμως παραλείψεις. In-game όμως</br>
  Υπάρχουν το λεγόμενα VR missions που πρόκειται για unlockable αποστολές με χρονόμετρο. Εκεί μπορεί ο</br>
  παίκτης να μάθει τα skills. Θα πρέπει όμως να σημειωθεί ότι τα VR είναι αρκετά βαρετά γιατί δεν αποτελούν</br>
  game time. Γίνονται instanced, εκτός πλοκής.</p>
  <p>Ξεκινώντας ως είθισται στο normal, παρατηρούμε ότι το παιχνίδι δε συγχωρεί (σε αντίθεση με την ευρεία</br>
  πλειοψηφία των Hack'n'Slash τίτλων) και τα boss είναι πραγματικά ζόρικα. Η μάχες όπως προανέφερα είναι επικές!</br>
  Ξεχάστε τα άπειρα potions που τα αγοράζεις από τον 'έμπορα' και βουρ στη μάχη. Έδω αναζωογονείσαι μέσω των</br>
  αντιπάλων σου. Zanda-tsu πριν μας 'αφήσει χρόνους' και τραβάμε την κυβερνό-σπονδυλική του στήλη η οποία μας</br>
  γεμίζει ζωή και ενέργεια.</p>
  <p>Αργότερα στο παιχνίδι φυσικά ξεκλειδώνουμε upgrades για τον Raiden, τα όπλα μας και μπορούμε να μάθουμε</br>
  καινούρια skills. Μέσα από τα αριστερά χέρια κάποιων αντιπάλων, τα οποία αποκτούμε 'εν ειρήνη' με Zanda-tsu</br>
  μπορούμε να ξεκλειδώσουμε περαιτέρω upgrades. Επίσης με την ευγενική χορηγία των boss του παιχνιδιού, μπορούμε</br>
  να αποκτήσουμε εξαιρετικά secondary weapons, που εννοείται πως δεν μπορούν να αντικαταστήσουν το High-Tech</br>
  Katana του Raiden. Αν δε σας αρέσουν τα katana... Well, deal with it!</p>
  <img src='Raiden-3.jpg' width='500px' height='300px'>
  
  <h2>I think it's time for Jack to Let 'Er Rip!</h2>
  <p>Όσον αφορά το θέμα της πλοκής, μπορώ με ευκολία να απονείμω τα εύσημα στην παραγωγή. Εξαιρετικό το concept!</br>
  Το ζήτημα για τον Raiden, περιβόητο μισθοφόρο, γνωστό και ως Jack the Ripper, που έχει απολέσει το αμαρτωλό</br>
  παρελθόν του, ανάγεται πλέον σε ζήτημα τιμής. Με έντονο το αντι-αμερικάνικο στοιχείο (σύνηθες στην ιαπωνική</br>
  σχολή παιχνιδιών) το σενάριο ουσιαστικά στοχεύει στην κλασσική κορύφωση της αιώνιας μάχης, όχι του καλού με</br>
  το κακό, αλλά του αγνού με το διεφθαρμένο. Κάτι ακόμα ανώτερο δηλαδή. Για όλους τους gamer που τους διαποτίζει</br>
  το αίσθημα της τιμής (και είναι πάρα πολλοί αυτοί), τουλάχιστον εντός παιχνιδιού, το σενάριο θα το βρουν υπέροχο.</br>
  Τα ρητά του παιχνιδιού, όπως σε όλα της σειράς MGS με την ευρύτερη έννοια, βρίθουν συμβολισμών με πολλούς διαλόγους</br>
  να κρύβουν 'πίσω κείμενο'. Αρκετές οι δόσεις 'ιαπωνικής καφρίλας' αλλά οι περισσότεροι gamers το έχουν πια συνηθίσει</br>
  είτε από τα παιχνίδια είτε από τα anime. Όμως κατα 99% όσα λέγονται θα προβληματίσουν, θα κεντρίσουν, θα τσιτώσουν.</br>
  Νομίζω ότι αυτό είναι και το βασικό για το concept αυτού του τόσο δυναμικού παιχνιδιού με σπουδαίο υπόβαθρο.</p>
  <img src='Raiden-5.jpg' width='500px' height='300px'>
  
  <h2>I got my own war to fight!</h2>
  <p>Με αυτήν την επική φράση, μετά τα credits, και καλοντυμένος ο Raiden αποχαιρετά τον gamer μετά τον πρώτο 'γύρο' παιχνιδιού.</br>
  Λέω πρώτο γύρο διότι το replayability του MGR είναι μεγάλο. Έχοντας πάρει πια 'proficiency' στα mechanics στο normal,</br>
  το hard σε ιντριγκάρει να το τολμήσεις και ω του θαύματος, παρατηρείς στο main screen ότι ξεκλείδωσες very hard mode</br>
  (και για αργότερα υπάρχει και Revengeance mode για τους μερακλήδες!). Σκέφτεσαι να ξεκινήσεις για να τελειώσεις όλες</br>
  τις μάχες με S rank, να μαζέψεις όλα τα χέρια, να κάνεις όλα τα upgrade, να, να, να...</br>
  Ίσως το μόνο που θες είναι να ξανανιώσεις αυτό το αίσθημα αυτής της υπέροχης περιπέτειας ξανα, ίσως να θες απλά να</br>
  ξανακούσεις όλες αυτές τις Metal μελωδίες που ξυπνούν τον πολεμιστή μέσα σου...</br>
  Μπορεί να θέλεις απλά να ακούσεις πάλι όλες αυτές τις μεγαλειώδεις ατάκες...</br>
  Ξέρετε κάτι, για όσους αισθάνονται έτσι, συμπάσχω!!!</p>
  <img src='Raiden-4m1.jpg' width='500px' height='300px'>";

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
	echo"
	</table>
</div>
</body>
</html>";
?>