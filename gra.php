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
	echo "<p>Witaj ".$_SESSION['user'];
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	include ('stopka.php');
?>
