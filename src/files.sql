-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 11 Ιαν 2015 στις 22:43:23
-- Έκδοση διακομιστή: 5.6.20
-- Έκδοση PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `project`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`fid` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Untitled.txt',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'News',
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'UploadsUntitled.txt',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Άδειασμα δεδομένων του πίνακα `files`
--

INSERT INTO `files` (`fid`, `title`, `description`, `category`, `path`, `created`, `updated`) VALUES
(10, 'Η ιστορία των Video Games', '		Η σχέση των Ελλήνων με τα video games ξεκίνησε σαν ένα πανάκριβο δώρο της θείας από την Αμερική.\r\n		Συνεχίστηκε σαν αγαπημένο πέρασμα του χρόνου της κοπάνας, για να εξελιχθεί σε οικιακή συσκευή ψυχαγωγίας,\r\n		που σε όλο και περισσότερες περιπτώσεις απευθύνεται σε όλη την οικογένεια.', 'Tributes', 'Uploads/gameshistory.php', '2015-01-11 17:03:33', '0000-00-00 00:00:00'),
(11, 'Απεβίωσε ο Ralph Baer', 'Φτωχότερη είναι σήμερα η βιομηχανία των βιντεοπαιχνιδιών, αφού όπως έγινε γνωστό, ο Ralph Baer έφυγε από τη ζωή σε ηλικία 92 ετών.', 'News', 'Uploads/ralph_baer.php', '2015-01-11 17:04:55', '2015-01-11 17:43:10'),
(12, 'Assassins Creed: Unity', 'Η σειρά Assassins Creed ξεκίνησε ως μία από τις πιο εντυπωσιακές που είχαμε δει το 2007. Θεωρίες συνωμοσίας, ο assassin Altair που σκαρφαλώνει σχεδόν οποιοδήποτε κτήριο (αλλά δεν κολυμπάει) και τα ωραία για την εποχή γραφικά του, ήταν μερικά από τα χαρακτηριστικά που έκαναν την σειρά αγαπητή σε ένα μεγάλο κομμάτι από gamers. Πέρα από όλα τα συνηθισμένα σενάρια που έχουμε δει σε games, τα AC games μας μετέφεραν κομμάτια πραγματικής ιστορίας και γρίφους-σπαζοκεφαλιές που χρειαζόντουσαν πολλές ώρες αφού ήταν για πολύ ψαγμένους π.χ λύση γρίφου με συστημα Fibonacci.', 'Reviews', 'Uploads/Assasins_Creed_Unity.php', '2015-01-11 17:12:27', '0000-00-00 00:00:00'),
(13, 'Metal Gear Rising: Revengeance', 'Σαν εισαγωγή, για το συγκεκριμένο παιχνίδι, πρέπει να αναφέρουμε ότι πρόκειται για το γόνο συνεργασίας του Hideo Kojima (Kojima Productions) και της Platinum Games (γνωστή από την ανάπτυξη των εξαιρετικών Vanquish και Bayonetta) με γονίδια από το θρυλικό (όπως υποδεικνύει και το όνομα) Metal Gear Solid.', 'Reviews', 'Uploads/mgr.php', '2015-01-11 17:15:34', '0000-00-00 00:00:00'),
(14, 'Η έκρηξη των MOBA ', 'Η κουλτούρα των eSports έχει μεγαλώσει αρκετά σε όλο τον κόσμο, ακολουθώντας το πρότυπο της Νότιας Κορέας, στην οποία τα eSports είναι τρόπος ζωής. Σημαντική προσφορά σε αυτήν\r\n		τη γιγάντωση των eSports στην Δύση, προσέφεραν τα παιχνίδια MOBA (Multiplayer Online Battle Arena) τα οποία αποτελούν πλέον τον κύριο πυλώνα όπου στηρίζεται η βιομηχανία\r\n		των eSports παγκοσμίως. Τι είναι όμως τα MOBA και πώς ξεκίνησε η μόδα τους;', 'Tributes', 'Uploads/MOBAgames.php', '2015-01-11 17:17:22', '0000-00-00 00:00:00'),
(15, 'H εξέλιξη των 3D γραφικών', 'Έχουν περάσει 56 χρόνια από την πρώτη προσπάθεια για δημιουργία ενός video game με χρήση δισδιάστατων γραφικών. Η τεχνολογία μέσα σε αυτό τον μισό αιώνα έκανε τεράστια άλματα\r\n	σε όλους τους σχετικούς τομείς, με αποτέλεσμα, το πρόσωπο του video gaming να έχει αλλάξει τόσο δραματικά που να μοιάζει πια με ένα τελείως νέο πεδίο της βιομηχανίας. Η πραγματικότητα\r\n	όμως είναι ότι όλα ξεκίνησαν με 1 φωτεινό τετραγωνάκι.', 'Tributes', 'Uploads/3Dhistory.php', '2015-01-11 17:19:36', '2015-01-11 17:41:02');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`fid`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `files`
--
ALTER TABLE `files`
MODIFY `fid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
