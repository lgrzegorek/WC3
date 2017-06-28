<?php
	require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	$user = $_SESSION['user'];

	if (mysql_connect($host, $db_user, $db_password) && mysql_select_db($db_name)) {
		$wynik = mysql_query("select * from uzytkownicy where user ='$user'")
		or die ("Błąd w zapytaniu");
		//mysql_close();
	}
	else echo "Nie mogę połączyć się z bazą.";
		
	
	while($ostLog = mysql_fetch_array($wynik)) { 
        //echo "Ostatnie logowanie: ".$ostLog['ostatnieLogowanie']."<br />"; 
		$_SESSION['ostatnieLogowanie'] = $ostLog['ostatnieLogowanie'];
		$_SESSION['drewno'] = $ostLog['drewno'];
		$_SESSION['zloto'] = $ostLog['zloto'];
		$_SESSION['zywnosc'] = $ostLog['zywnosc'];
	}

	
	$dataczas = new DateTime();
	//echo "Data i czas serwera: ".$dataczas->format('Y-m-d H:i:s');
	/*$ostatnie = DateTime::createFromFormat('Y-m-d H:i:s', $_SESSION['ostatnieLogowanie']);
	$roznica = $dataczas->diff($ostatnie);
	echo "<br/>Roznica: ".$roznica->format('%d dni, %h godz, %i min %s sek');*/
	
	$timeOstatni = strtotime($_SESSION['ostatnieLogowanie']);
	$timeTeraz = strtotime(date('Y-m-d H:i:s'));
	$roznicaSekundy = $timeTeraz - $timeOstatni;
	//echo "<br>Roznica w sekundach: ".$roznicaSekundy;
	
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	$sql = $polaczenie->query("update uzytkownicy set ostatnieLogowanie=now() where user = '$user'");
	//Teraz trzeba dodac jakies mnozniki, czas znajduje sie w $roznicaSekundy
	
	
	
	//Mnoznik do zmiany w zaleznosci od technologii i robotnikow
	$mnoznik = $roznicaSekundy;
	$_SESSION['mnoznik'] = $mnoznik;
	$sql = $polaczenie->query("update uzytkownicy set drewno=drewno+'$mnoznik', zloto=zloto+'$mnoznik', zywnosc=zywnosc+'$mnoznik' where user = '$user'");
	
	while($ostLog = mysql_fetch_array($wynik)) { 
		$_SESSION['drewno'] = $ostLog['drewno'];
		$_SESSION['zloto'] = $ostLog['zloto'];
		$_SESSION['zywnosc'] = $ostLog['zywnosc'];
	}
?>