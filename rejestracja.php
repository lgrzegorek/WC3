<?php
	session_start();
	if (isset($_POST['email'])){
		//Jesli udana walidacja
		$flaga = true;
		
		//Poprawnosc nicku
		$nick = $_POST['nick'];
		if (strlen($nick)<3 || strlen($nick)>20) {
			$flaga = false;
			$_SESSION['e_nick'] = "Nick musi posiadać od 3 do 20 znaków.";
		}
		if ( !(ctype_alnum($nick)) ) {
			$flaga = false;
			$_SESSION['e_nick'] = "Nick nie może zawierać znaków specjalnych (w tym polskich ogonków).";
		}
		
		//Poprawnosc maila
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		if ( !(filter_var($email, FILTER_VALIDATE_EMAIL)) || $email != $emailB ) {
			$flaga = false;
			$_SESSION['e_email'] = "Wprowadź poprawny adres e-mail.";
		}
		
		//Poprawnosc hasla
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		if (strlen($haslo1)<3 || strlen($haslo2)>20) {
			$flaga = false;
			$_SESSION['e_haslo'] = "Hasło powinno zawierać od 8 do 20 znaków.";
		}
		if ($haslo1 != $haslo2){
			$flaga = false;
			$_SESSION['e_haslo'] = "Podane hasła nie są identyczne.";
		}
		
		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

		
		//Sprawdzanie checkboxa
		if (!isset($_POST['regulamin'])) {
			$flaga = false;
			$_SESSION['e_regulamin'] = "Potwierdź akceptację regulaminu.";
		}
		
		//Sprawdzanie captcha
		$klucz = "6LecySIUAAAAAJ2Tqux5-2vRlh6cbpA9i1S874IS";
		$sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$klucz.'&response='.$_POST['g-recaptcha-response']);
		$odpowiedz = json_decode($sprawdz);
		
		if (!($odpowiedz->success)) {
			$flaga = false;
			$_SESSION['e_bot'] = "Potwierdź, że nie jesteś botem.";
		}
		
		
		//Laczenie z baza danych
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try {
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0) {
				throw new Exception(mysqli_connect_errno());
			}
			else {
				//Czy email juz istnieje
				$rezultat = $polaczenie->query("select id from uzytkownicy where email='$email'");
				if (!$rezultat) throw new Exception($polaczenie->error);
				$ile_maili = $rezultat->num_rows;
				if ($ile_maili>0){
					$flaga = false;
					$_SESSION['e_email'] = "Istnieje już konto przypisane do podanego adresu e-mail";
				}
				
				//Czy nick juz istnieje
				$rezultat = $polaczenie->query("select id from uzytkownicy where user='$nick'");
				if (!$rezultat) throw new Exception($polaczenie->error);
				$ile_nickow = $rezultat->num_rows;
				if ($ile_nickow>0){
					$flaga = false;
					$_SESSION['e_nick'] = "Istnieje już gracz o podanym nicku.";
				}
				
				
				//Jesli walidacja poprawna
				if ($flaga) {
					if ($polaczenie->query("insert into uzytkownicy values (NULL, '$nick', '$haslo_hash', '$email',100, 100, 100)")) {
						$_SESSION['udanarejestracja'] = true;
						header("Location: witamy.php");
					}
					else {
						throw new Exception($polaczenie->error);
					}
				}
				$polaczenie->close();
			}
			
		} 
		catch (Exception $e) {
			echo '<span style="color:red">Błąd serwera, przepraszamy za niedogodności i prosimy o rejestrację w innym terminie.</span>';
			//echo '</br>Informacja developerska:'.$e;
		}
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - załóż darmowe konto</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<form method="post">
		Nick: </br><input type="text" name="nick"/> <br/>
		<?php
			if (isset($_SESSION['e_nick'])){
				echo '<div class="error">'.$_SESSION['e_nick'].'</div';
				unset($_SESSION['e_nick']);
			}
		?>
		E-mail: <br/><input type="text" name="email"/> <br/>
		<?php
			if (isset($_SESSION['e_email'])){
				echo '<div class="error">'.$_SESSION['e_email'].'</div';
				unset ($_SESSION['e_email']);
			}
		?>
		Twoje hasło: <br/><input type="password" name="haslo1"/> <br/>
		<?php
			if (isset($_SESSION['e_haslo'])) {
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div';
				unset ($_SESSION['e_haslo']);
			}
		?>
		Powtórz hasło: <br/><input type="password" name="haslo2"/> </br>
		<?php
			if (isset($_SESSION['e_haslo'])) {
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div';
				unset ($_SESSION['e_haslo']);
			}
		?>
		
		
		<label>
			<input type="checkbox" name="regulamin"/>Akceptuję regulamin
		</label>
		<?php
			if (isset($_SESSION['e_regulamin'])) {
				echo '<div class="error">'.$_SESSION['e_regulamin'].'</div';
				unset ($_SESSION['e_regulamin']);
			}
		?>
		
		<div class="g-recaptcha" data-sitekey="6LecySIUAAAAAHtMCx5xItKeSMSe7oJKfNiKh9QC"></div></br>
		<?php
			if (isset($_SESSION['e_bot'])) {
				echo '<div class="error">'.$_SESSION['e_bot'].'</div';
				unset ($_SESSION['e_bot']);
			}
		?>
		
		<input type="submit" value="Zarejestruj się"/>
	</form>
</body>
</html>