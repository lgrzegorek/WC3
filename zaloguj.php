<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownicy WHERE user='%s'",
		mysqli_real_escape_string($polaczenie,$login)))){
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();
				
				// Jak narazie jeden poprawny uzytkownik z hashowanym haslem nick: adam haslo: qwerty
				// bartek 123456789
				if (password_verify($haslo, $wiersz['pass'])){
					$_SESSION['zalogowany'] = true;
					$_SESSION['id'] = $wiersz['id'];
					$_SESSION['user'] = $wiersz['user'];
					$_SESSION['drewno'] = $wiersz['drewno'];
					$_SESSION['zloto'] = $wiersz['zloto'];
					$_SESSION['email'] = $wiersz['email'];
					//$_SESSION['dnipremium'] = $wiersz['dnipremium'];
				$rezultat2 = $polaczenie->query("select * from budynki where nick='$login'");
                if($rezultat2) 
                    while ( $rows = $rezultat2->fetch_assoc() ) {
                        $_SESSION['castle_lvl']=$rows['castle'];
                        $_SESSION['altar_lvl']=$rows['altar'];
                        $_SESSION['house_lvl']=$rows['house'];
                        $_SESSION['forge_lvl']=$rows['forge'];
                        $_SESSION['barrack_lvl']=$rows['barrack'];
                        $_SESSION['forge_lvl']=$rows['forge'];
                        $_SESSION['max_zywnosc'] = $rows['house_lvl']*10;
                        $_SESSION['magazyn_zlota']= $rows['magazynZlota'];
                        $_SESSION['magazyn_drewna']= $rows['magazynDrewna'];
                    }	
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: podglad.php');
				}
				else {
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
				}
			} 
			else {
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
			}
			
		}
		
		$polaczenie->close();
        
	}
	
?>