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
 <h1> Assassins Creed Unity</h1>
 <img src='ass1.jpg' width='500px' height='300px'>
 
<p>O Arno σας καλοσορίζει στη Γαλλία του 18ου αιώνα. <br /><br />

Η σειρά Assassins Creed ξεκίνησε ως μία από τις πιο εντυπωσιακές που είχαμε δει το 2007. Θεωρίες<br />
 συνωμοσίας, ο assassin Altair που σκαρφαλώνει σχεδόν οποιοδήποτε κτήριο (αλλά δεν κολυμπάει) και<br />
 τα ωραία για την εποχή γραφικά του, ήταν μερικά από τα χαρακτηριστικά που έκαναν την σειρά αγαπητή<br />
 σε ένα μεγάλο κομμάτι από gamers. Πέρα από όλα τα συνηθισμένα σενάρια που έχουμε δει σε games, τα AC<br />
 games μας μετέφεραν κομμάτια πραγματικής ιστορίας και γρίφους-σπαζοκεφαλιές που χρειαζόντουσαν <br />
 πολλές ώρες αφού ήταν για πολύ ψαγμένους π.χ λύση γρίφου με συστημα Fibonacci. <br /><br />

Με τα χρόνια όμως, τα Assassins Creed games άρχισαν να κουράζουν. Ο λόγος ήταν πως κυκλοφορούσαν κάθε<br />
 χρόνο και για συνεχόμενες χρονιές βλέπαμε τον ίδιο πρωταγωνιστή, Ezio. Στη συνέχεια, η Ubisoft Montreal<br />
 σε συνεργασία με άλλα studio της εταιρίας μας παρουσίασαν το κάτι διαφορετικό που ζητούσαμε. Η σειρά <br />
 πέρασε σε πιο open world επίπεδο με το Assassins Creed III όπου τα γεγονότα του διαδραματίζονταν <br />
 στην Αμερική με εσάς να εξερευνείτε το μέρος για όσο χρονικό διάστημα θελήσετε. Πέρυσι, με το <br />
 Assassins Creed IV: Black Flag, το open world στοιχείο ήταν πιο έντονο από ποτέ. Οι τεράστιες <br />
 θάλασσες της Καραϊβικής ήταν διαθέσιμες για εξερεύνηση και οι ναυμαχίες με τους αντίπαλους πειρατές<br />
 έδιναν και έπαιρναν. </p><br />
 
 <img src='ass2.jpg' width='500px' height='300px'>
 
 <p>Παρά τα υπέροχα γραφικά του Assassins Creed IV: Black Flag στις κονσόλες νέας γενιάς, υπήρχε μια<br />
 δυσαρέσκεια από μέρος των fans ως προς το που πηγαίνει η σειρά. Η αλήθεια είναι πως ακόμα και εγώ <br />
 είχα βαρεθεί την αγαπημένη μου κάποτε σειρά. Το 2014 όμως, η Ubisoft αποφάσισε να μας εντυπωσιάσει<br />
 και να προσφέρει μια original Assassin’s Creed εμπειρία. <br /><br />

Ο νέος τίτλος ονομάζεται Assassins Creed: Unity και το development του ξεκίνησε το 2010, μετά το <br />
Assassins Creed: Brotherhood. Η δημιουργία του δεν ήταν απλή υπόθεση αφού μαζί με την Ubisoft Montreal,<br />
 χρειάστηκαν άλλα εννέα studio σε Toronto, Kiev, Singapore, Shanghai, Annecy, Montpellier, Bucharest,<br />
 Quebec και Chengdu. Για χάρη του Unity, χρειάστηκε εκτενής μελέτη της Γαλλίας του 18ου αιώνα από τους<br />
 developers. Επιπλέον, η εταιρία χρειάστηκε την βοήθεια του Γάλλου ιστορικού Dr. Jean Clement Martin <br />
 όσον αφορά το σενάριο και εμπνεύστηκε την εμφάνιση του νερού μέσα στην πόλη από τους πίνακες του <br />
 ζωγράφου Nicolas-Jean-Baptiste Raguenet. Το αποτέλεσμα δικαιώνει την σκληρή δουλειά και σε εμάς άφησε<br />
 τις καλύτερες εντυπώσεις.</p><br />
 
<h3><b> Όλα ξεκινούν με αίμα...</b></h3>
<p>Ο πρωταγωνιστής του Assassin’s Creed: Unity είναι μισός Γάλλος και μισός Αυστριακός και ονομάζεται<br />
 Arno Victor Dorian, ή αλλιώς σκέτο Arno. Ο Arno μεγάλωσε σε οικογένεια ευγενών σε ένα αρχοντικό στις<br />
 Βερσαλλίες. Το σενάριο θέλει τον μικρό, τότε, πρωταγωνιστή να μένει ορφανός σε ηλικία οκτώ χρονών<br />
 αφότου δολοφονήθηκε ο πατέρας του. Την κηδεμονία του μικρού assassin ανέλαβε o ευγενής François de la Serre,<br />
 ο οποίος τον μεγάλωσε μαζί με την κόρη του, Elise. <br /><br />

Ο François de la Serre πεθαίνει λίγο αργότερα και ο δολοφόνος κατηγορεί τον Arno. Οι φρουροί βλέπουν τον<br />
 πρωταγωνιστή γεμάτο με αίματα και πιστεύοντας τα λεγόμενα του δράστη, τον φυλακίζουν. Μέσα στην φυλακή, <br />
 ο Arno μαθαίνει λεπτομέρειες για τον πατέρα του και ξεκινάει το ταξίδι μέσα από την Brotherhood of Assassins<br />
 για να κερδίσει πίσω την ελευθερία του και να καθαρίσει το όνομά του. </p><br />
 
 <img src='ass3.jpg' width='500px' height='300px'>
 
 <h3><b>Από μικρός στα βάσανα</b></h3>
<p>Ξεκινώντας θα μπορέσετε να χειριστείτε τον Arno όταν σε ηλικία οκτώ ετών. Το πρώτο κεφάλαιο είναι<br />
 άκρως εντυπωσιακό αφού θα έχετε την ευκαιρία να εξερευνήσετε μερικές αίθουσες από το αριστοκρατικό<br />
 παλάτι που βρίσκεστε και να θαυμάσετε τα καθαρά γραφικά στο PS4. Αμέσως ξεκινάει η δράση που <br />
 αποκαλύπτει και την φύση σας αφού το game σας ζητάει να κλέψετε ένα μήλο και στην συνέχεια να <br />
 κρυφτείτε για να σας χάσει ο φρουρός που είναι έτοιμος να σας πιάσει.<br /><br />

Εδώ είναι η πρώτο φορά που ερχόμαστε σε επαφή με το Last Known Position. Πρόκειται για ένα καινούριο<br />
 σύστημα με το οποίο μπορείτε να δείτε ποια ήταν η τελευταία θέση που σας είδε ο εχθρός. Έχοντας αυτό<br />
 το πλεονέκτημα, θα μπορέσετε να σκεφτείτε καλύτερα που θα είναι η επόμενη κρυψώνα σας αφού θα είναι <br />
 σαν να γνωρίζετε από πριν προς τα που θα κινηθεί ο αντίπαλος. Το σύστημα δουλεύει ακριβώς με τον ίδιο<br />
 τρόπο όπως και στο Splinter Cell: Conviction και Blacklist.</p><br />
 
<h3><b> Break, twist, pull!</b></h3>
<p>Το σύστημα μάχης στο Assassin’s Creed: Unity είναι σχετικά το ίδιο με τα προηγούμενα games της σειράς.<br />
 Για να επιτεθείτε αρκεί να πατήσετε το τετράγωνο, άμυνα και αντεπίθεση με τον κύκλο και dodge με το<br />
 Χ. Το dodge προτιμάται σε περίπτωση που οι αντίπαλοι είναι αρκετοί και σας περικυκλώσουν αλλά και<br />
 εάν ο εχθρός έχει βαρύ όπλο όπως π.χ τσεκούρι. Οι αντίπαλοι με τα σπαθιά είναι σχετικά εύκολοι αν <br />
 ακολουθήσετε το σύστημα άμυνα-αντεπίθεση αφού χάνουν την ισορροπία τους και είναι δυσκολότερο για <br />
 εκείνους να αποκρούσουν τα χτυπήματά σας. Ως χρόνια παίκτρια της σειράς Assassins Creed, έχω <br />
 συνηθίσει το σύστημα μάχης και μέτρια A.I αλλά έχω να δηλώσω πως σε φέτος το επίπεδο βρίσκεται ένα<br />
 κλικ πιο πάνω σε αυτόν τον τομέα.<br /></p>
 
 <img src='ass4.jpg' width='500px' height='300px'>
 
 <p>Ο Arno μπορεί να χειριστεί σπαθιά, πιστόλια, Rifles, τα βαριά όπλα όπως τσεκούρια και λόγχες και<br />
 φυσικά το χαρακτηριστικό των Assassins, Hidden Blade. Στην αρχή θα πρέπει να πολεμήσετε με το σπαθί<br />
 που έχετε ήδη και μέσα από τους πόντους και τα χρήματα που κερδίζετε να αναβαθμίσετε τον οπλισμό <br />
 σας. Εδώ πρέπει να σας ενημερώσουμε για την νέα προσθήκη, το Phantom Blade. Πρόκειται για μια <br />
 παραλλαγή του Hidden Blade η οποία επιτρέπει στον πρωταγωνιστή μας να εκτελεί επιθέσεις από μακριά.<br />
 Στα διάφορα shops που θα βρείτε στην πόλη θα μπορέσετε να αγοράσετε πυρομαχικά για το Phantom Blade<br />
 έτσι ώστε να κοιμήσετε ή σκοτώσετε τους φρουρούς χωρίς να πάρει κανείς χαμπάρι τίποτα.<br /></p>
 
 <h2>Ο Arno είναι Assassin, η Elise Templar. Παρόλα<br />
 αυτά τίποτα δεν τους σταματάει όμως να είναι<br />
 μαζί.<br /></h2>
 
 <h3><b>It’s Shopping time</b></h3> 
<p>Ο Arno έχει τον τρόπο του να βγάζει χρήματα. Μια επιλογή είναι να κάνετε loot τα θύματά σας και να<br />
 παίρνετε ότι έχουν πάνω τους. Η πιο τίμια λύση όμως έρχεται με την μορφή του Cafe Theatre, από το <br />
 οποίο παίρνετε ότι κέρδη βγάζει. Πρόκειται για ένα κτίσμα που αγοράζετε αργότερα στο παιχνίδι και <br />
 αντικαθιστά την Villa από το Assassin’s Creed II ή το Homestead από το Brotherhood. Αφού αποκτήσετε<br />
 το Cafe Theatre, θα μπορείτε να το αναβαθμίσετε κάνοντας διάφορες αγορές και να αυξήσετε με αυτόν <br />
 τον τρόπο το εισόδημά σας από αυτό αλλά και τα μυστικά δωμάτια που ξεκλειδώνονται ένα ένα. Το Cafe<br />
 λειτουργεί πιο πολύ ως σπίτι σας αφού εκεί μπορείτε να αλλάξετε ρούχα και να δείτε όλα τα τρόπαια <br />
 από τις αποστολές που φέρατε εις πέρας. Επίσης, θα έχετε την δυνατότητα να κάνετε fast travel εκεί<br />
 όπου και αν βρίσκεστε.<br /></p>
 
  <img src='ass5.jpg' width='500px' height='300px'>
  
 <p> Με τα χρήματα που αποκτάτε μπορείτε να αγοράσετε καλύτερο εξοπλισμό για τον Assassin σας. Υπάρχει<br />
  μια πληθώρα από διαφορετικά κομμάτια gear για να αγοράσετε ανάλογα με τα γούστα και τις ανάγκες σας.<br />
  Αυτό το λέμε διότι ανάλογα με τις αποστολές οι οποίες διαφέρουν όσον αφορά το stealth στοιχείο τους<br />
  θα πρέπει να προσαρμόσετε και την στολή σας. Υπάρχουν hoods για παράδειγμα που σας προσφέρουν <br />
  περισσότερο stealth και μπότες που σας κάνουν να ακούγεστε λιγότερο ή την δυνατότητα να πάρετε <br />
  λιγότερο falling damage. Τα όπλα σας δίνουν επιπλέον damage, υπάρχουν ρούχα που σας προσδίδουν health<br />
  ή stealth (ψωνίστε ανάλογα με το πως θέλετε να παίζετε) κτλ. Όλα βασίζονται πάνω στο τι χρειάζεστε <br />
  σε κάθε αποστολή. Είναι αρκετά χρήσιμη επίσης η δυνατότητα να διαλέξετε το gear και τα όπλα σας πριν<br />
  από κάθε αποστολή χωρίς να είναι ανάγκη να γυρίσετε στο Cafe Theatre για να αλλάξετε. <br /><br />

Με τους πόντους που αποκτάτε από τις κύριες και δευτερεύουσες αποστολές, μπορείτε να τοποθετήσετε τα <br />
skills σας όπως θελήσετε. Τα customization points είναι διαθέσιμα για να τα ξοδέψετε σε: Melee, Ranged,<br />
 Stealth και Health. Καλό είναι να κοιτάξετε όλα τα points και να τα μάθετε γιατί μπορεί να σας χρησιμεύσουν<br />
 σε κάτι και να κάνουν την ζωή σας πιο εύκολη. Ένα απλό παράδειγμα: Σε μια αποστολή θα πρέπει να κλέψετε<br />
 τα κλειδιά από έναν NPC για να ξεκλειδώσετε μια πόρτα. Εάν είχατε αγοράσει το Lockpick skill από το <br />
 Stealth menu, δεν θα ήταν ανάγκη για κάτι τέτοιο αλλά θα ανοίγατε την πόρτα μόνοι σας.<br /> </p>
 
  <img src='ass6.jpg' width='500px' height='300px'>
  
<h3><b>Ο δικός σου τρόπος</b></h3> 
<p>Το Assassins Creed: Unity έχει 12 chapters και το καθένα έναν random αριθμό από αποστολές που<br />
 περιλαμβάνουν Assassinations ή απλά την συνέχεια της ιστορίας. Οι αποστολές λαμβάνουν χώρα σε<br />
 διάφορα μέρη της πόλης όπως για παράδειγμα το Παρίσι ή τις Βερσαλλίες και για να μετακινηθείτε<br />
 ανάμεσα σε αυτές τις τεράστιες αποστάσεις, σας περιμένει μια καρότσα που θα ζήλευε κάθε <br />
 αριστοκράτισσα της εποχής. <br /><br />

Το καλό με τα Missions είναι πως η Ubisoft σας επιτρέπει να διαλέξετε τον τρόπο που θέλετε για <br />
την ολοκλήρωση οποιασδήποτε αποστολής. Εγώ για παράδειγμα ακολούθησα πιο stealth τακτικές ρίχνοντας<br />
 smoke bombs πριν μπω σε μάχη με τέσσερα άτομα έτσι ώστε να τους κάνω επιθέσεις από πίσω χωρίς να <br />
 με δουν και να μου επιτεθούν καθόλου. Επίσης, αντί να βγω στα ανοιχτά για ένα συγκεκριμένο <br />
 Assassination, προτίμησα να ξεκλειδώσω όλες τις πόρτες με το Lockpicking skill, να ανέβω σε στρατηγικό<br />
 σημείο, να σκοτώσω τον εχθρό με το rifle που βρισκόταν πάνω έτοιμος να με καθαρίσει και χρησιμοποιώντας<br />
 το Eagle vision να δω τους υπόλοιπους φρουρούς. <br /><br />

Αφού τελειώσετε κάθε αποστολή, μπορείτε να κάνετε free roam στην πόλη και να εξερευνήσετε κάθε πλευρά <br />
της. Έχετε την δυνατότητα να επέμβετε στις αδικίες που βλέπετε στον δρόμο όπως κλέφτες να παίρνουν <br />
χρήματα από γυναίκες ή να σκοτώνουν πολίτες. Από την άλλη έχετε την δυνατότητα να τους αγνοήσετε όλους<br />
 αλλά θα σας προτείναμε να μην το κάνετε καθώς οι μικροαποστολές αυτές δεν παίρνουν ούτε 10 δευτερόλεπτα<br />
 και σας αποφέρουν Points. <br /></p>
 
 <img src='ass7.jpg' width='500px' height='300px'>
 
 <p>Η συνολική διάρκεια του Assassins Creed Unity όσον αφορά στο βασικό story ανέρχεται στις 15-20<br />
 ώρες, ανάλογα με το πόσο γρήγορα θα καταφέρετε να ολοκληρώσετε ορισμένους γρίφους που απαιτούν <br />
 παρατηρητικότητα, ευστροφία και ταχύτητα. Για τους βετεράνους του είδους η διάρκεια της βασικής <br />
 ιστορίας είναι λίγο μικρότερη από το Assassins Creed IV: Black Flag. <br /><br />

Ωστόσο, μην βιαστείτε να κρίνετε, καθώς πέρα απ' το βασική ιστορία υπάρχουν chapters σε πολλές <br />
ενδιαφέρουσες τοποθεσίες ανά τον κόσμο. Η συνολική διάρκεια των προαιρετικών chapters ξεφεύγει <br />
και φτάνει τις 80 ώρες, συνεπώς έχουμε να κάνουμε με το μεγαλύτερο Assassins Creed όλων των εποχών.<br /> </p>

<h3><b>Multiplayer...ελλείψεις</b></h3>
<p>Φέτος δεν θα δούμε competitive multiplayer σε κανένα από τα δύο Assassins Creed που θα<br />
 κυκλοφορήσουν. Αυτό σημαίνει πως ούτε το Unity, ούτε το Rogue θα περιλαμβάνουν το ανταγωνιστικό<br />
 κομμάτι που είχαν οι προηγούμενοι τίτλοι. Αντιθέτως, η Ubisoft προτίμησε να εισάγει την έννοια<br />
 του co-op play με την μορφή μεμονωμένων αποστολών.<br /> </p>
 
  <img src='ass8.jpg' width='500px' height='300px'>
  
  <p>Με λίγα λόγια, ενώ κάνετε την βόλτα σας στην πόλη θα δείτε διάφορους NPC από όπου μπορείτε να<br />
  μπείτε σε queue για κάποια co-op αποστολή. Τα missions αυτά είναι φτιαγμένα για να παίζονται <br />
  με ομάδα τεσσάρων ατόμων και η εμπειρία σας θα βελτιωθεί σημαντικά όταν ένα άτομο από την ομάδα<br />
  έχει επενδύσει σε group skills όπως για παράδειγμα το Group Healing. Το πιο ενδιαφέρον<br /> 
  χαρακτηριστικό ίσως είναι τα Heists όπου κλέβετε χρήματα και όσο να 'χει, το όνομα του <br />
  συγκεκριμένου mode θυμίζει το αντίστοιχο από το GTA V.<br /> </p>
  
<h3><b>Welcome at Paris</b></h3>
<p>Το Assassins Creed: Unity είναι φτιαγμένο με την AnvilNext engine, την ίδια μηχανή γραφικών που<br />
 είδαμε και στο Assassins Creed IV: Black Flag. Οπτικά, τα cutscenes είναι άκρως εντυπωσιακά, με<br />
 άπταιστο bump mapping και όμορφες παρουσίες. In-game τα textures δεν έχουν βελτιωθεί σε μεγάλο <br />
 βαθμό και παραμένουν στάσιμα. Στο PC με μια καλή κάρτα γραφικών και max ρυθμίσεις απ' ότι έχουμε δει<br />
 θα έχετε ένα πολύ καλύτερο αποτέλεσμα απ' ότι στις κονσόλες, όπου η σκίαση και τα εφέ καιρού έπρεπε<br />
 να βελτιωθούν σημαντικά. <br /><br />

Το art direction όσον αφορά το level design είναι υποδειγματικό, καθώς οι γραφίστες της Ubisoft <br />
έχουν δημιουργήσει τα μεγάλα κτίρια της Γαλλίας (ειδικά του Παρισιού) με την παραμικρή λεπτομέρεια<br />
 στους εσωτερικούς και τους εξωτερικούς χώρους αυτών. Οι ναοί, τα πάρκα, οι γέφυρες και τα <br />
 αριστοκρατικά παλάτια θεωρούνται άξια θαυμασμού. <br /></p>
 
 <img src='ass9.jpg' width='500px' height='300px'>
 
 <p>Οι κύριοι χαρακτήρες είναι σχεδιασμένοι με λεπτομέρειες. Μπορούμε να διακρίνουμε τις υφές στα ρούχα <br />
 τους και τις τρίχες από τα μαλλιά τους σαν να βλέπουμε ταινία. Μεγάλη λεπτομέρεια έχει δωθεί στα <br />
 animations ακόμα και των random NPCs αφού αλλάζουν συμπεριφορά κάθε φορά που περνάτε από δίπλα <br />
 τους αλλά το μεγάλο αρνητικό είναι πως οι περισσότεροι από αυτούς φορούν τα ίδια ρούχα. <br /><br />

Είδαμε μερικά προβλήματα όσον αφορά bugs στους NPCs. Μερικοί περπατούσαν στον αέρα ενώ άλλοι <br />
κολλούσαν στους τοίχους για κάμποσα δευτερόλεπτα. Παρόλα αυτά, οφείλουμε να ομολογήσουμε πως η<br />
 Anvil engine καταφέρνει να κάνει spawn ένα τεράστιο πλήθος ανθρώπων χωρίς να ζορίζεται. To Assassin's<br />
 Creed Unity τρέχει σε ανάλυση 900p, με 30 frames τόσο σε PS4 όσο και σε Xbox One, παρουσιάζοντας <br />
 πτώσεις μέχρι και 10 frames πιο κάτω ανάλογα με τους χαρακτήρες που βρίσκονται τριγύρω. Το πρόβλημα<br />
 εντοπίζεται στην συσσώρευση πολλών χαρακτήρων σε ένα σημείο, λόγω του ότι η Ubisoft ήθελε να <br />
 απεικονίσει με τον καλύτερο τρόπο την γαλλική επανάσταση στη Γαλλία με ότι αυτό συνεπάγεται στους<br />
 δρόμους των πόλεων.<br /></p>
 
 <h3><b>Ηχητικός τομέας</b></h3>
<p>Το μεγαλύτερο ίσως θετικό του AC Unity είναι το άριστο voice acting του. Ο Arno σαν χαρακτήρας είναι<br />
 μακράν ο πιο ενδιαφέρον Assassin που έχουμε δει και με τον τρόπο που εκφράζεται μας κάνει να δεθούμε<br />
 μαζί του. Ο κύριος λόγος για τον οποίο συμβαίνει κάτι τέτοιο είναι γιατί οι προηγούμενοι ήρωες κατά<br />
 κάποιο τρόπο φαινόντουσαν πιο απρόσωποι. Ο Arno έμεινε ορφανός σε μιρή ηλικία και παρόλα αυτά σε <br />
 δύσκολες στιγμές αντιδράει με χιούμορ, κάτι που σίγουρα δεν έχουμε ξαναδεί στον τίτλο. Αξίζει να σημειωθεί<br />
 ότι ο voice actor που υποδύεται τον Arno είναι ο Dan Jeannotte. Σαν ηθοποιός έχει παίξει μικρούς <br />
 ρόλους σε ταινίες όπως οι Death Race και Red 2, αλλά κυρίως έχει εμφανιστεί σε τηλεοπτικές σειρές. <br />
 Είχε αναλάβει επίσης μικρούς ρόλους στο Assassins Creed IV: Black Flag, όμως τώρα η Ubisoft αποφάισε<br />
 να του αναθέσει τον ρόλο του κεντρικού πρωταγωνιστή κι ο γάλλος την δικαίωσε για την επιλογή της.<br /><br />

Το soundtrack του Unity ανέλαβαν οι Chris Tilton, Ryan Amon και Sarah Schachner, όπου ομολογουμένως <br />
έκαναν άριστη δουλειά. Τα ηχητικά εφέ είναι καλόδουλεμένα και χρησιμοποιώντας ακουστικά στην κονσόλα <br />
σας θα έχετε σίγουρα μια καλύτερη εμπειρία. Αξίζει να αναφέρουμε πως αν και τα γεγονότα διαδραματίζονται<br />
 στην Γαλλία, όλοι έχουν άριστη Αγγλική προφορά και λίγες φορές ακούμε γαλλικές εκφράσεις.<br /> <p>

 <img src='ass10.jpg' width='500px' height='300px'>
 
 <h3><b>It Unites us</b></h3>
<p>Το Assassin’s Creed Unity μας είχε δείξει αρκετά από τα τρέιλερ και τελικά δεν απογοήτευσε. Μπορείτε<br />
 να δείτε διάφορες ιστορικές στιγμές, να αφήσετε το στίγμα σας στην Γαλλία και συγχρόνως να καθαρίσετε<br />
 το όνομά σας από την άδικη κατηγορία του θανάτου του François de la Serre. Δεν σας κρύβουμε πάντως<br />
 ότι το γνώριμο gameplay ίσως να μην συγκινήσει όσους περίμεναν το κάτι παραπάνω. <br /><br />

Κατά την διάρκεια του campaign θα εκτελέσετε διάφορες αποστολές οι οποίες το μόνο σίγουρο είναι πως θα<br />
 σας κρατήσουν σε εγρήγορση, κυρίως γιατί θα αποφασίσετε εσείς τον τρόπο με τον οποίο θα αντιμετωπίσετε<br />
 τα κρίσιμα σημεία. Ο οπτικοακουστικός τομέας είναι περισσότερο απο ικανοποιητικός, κάτι που δείχνει ότι<br />
 το Unity είναι ένας τίτλος που δουλεύτηκε από την Ubi. Θα μπορούσε να διαθέτει competitive multiplayer,<br />
 ωστόσο αναπληρώνει τον χρόνο που θα δαπανούσατε εκεί με την προσθήκη των προαιρετικών αποστολών. Η ουσία<br />
 είναι ότι έχουμε να κάνουμε με έναν ακόμη Assassin’s Creed το οποίο εν τέλει απολαύσαμε.<br /></p>";
 
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
 