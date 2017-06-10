<?php
	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
?>

	
<?php
	include ('menu2.php');
	include ('czas.php');
	
	
	
	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
	echo " | <b>Kamień</b>: ".$_SESSION['kamien'];
	echo " | <b>Żywność</b>: ".$_SESSION['zywnosc']."</p>";
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	

	include ('stopka.php');
	
?>
