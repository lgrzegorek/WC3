<?php
	//session_start();
	function suma($ostatnia) {
		if ($ostatnia == 1)
			return 1;
		else 
			return $ostatnia + suma($ostatnia-1);
	}
	
	//Wiem, ze jest connect.php ale bez przeklejenia tutaj nie dzialalo
	$host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "warcraft";
	
	
	require_once "connect.php";
	
	
	$rankingBadania = 10*($_SESSION['t_drewna']) + 10*($_SESSION['t_uzbrojenia']) + 10*($_SESSION['t_wydobycia']) + 10*($_SESSION['t_broniPalnej']) + 10*($_SESSION['t_opancerzenia']) + 10*($_SESSION['t_opancerzenia1']) + 10*($_SESSION['t_budownictwa']);
	
	$rankingBudynki = 12*($_SESSION['castle_lvl']) + 12*($_SESSION['altar_lvl']) + 12*($_SESSION['house_lvl']) + 12*($_SESSION['forge_lvl']) + 12*($_SESSION['barrack_lvl']) + 12*($_SESSION['magazynZlota_lvl']) + 12*($_SESSION['magazynDrewna_lvl']);
	
	
	$a=0;
	$b=0;
	$c=0;
	$d=0;
	$e=0;
	$f=0;
	$user = $_SESSION['user'];
	$rasa = $_SESSION['rasa'];
	try {
		$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
		$polaczenie1 = @new mysqli($host, $db_user, $db_password, $db_name);
		$polaczenie2 = @new mysqli($host, $db_user, $db_password, $db_name);
		if ($polaczenie->connect_errno != 0) {
			throw new Exception(mysqli_connect_errno());
		}
		else {
			if ($rasa == 'Orkowie') {
				$sql = "select * from orkowie where nick='$user'";
				if ($rezultat = @$polaczenie->query($sql)) {
					$ilosc_wynikow = $rezultat->num_rows;
					if ($ilosc_wynikow == 1) {
						$wiersz = $rezultat->fetch_assoc();
						$a = $wiersz['siepacze'];
						$b = $wiersz['lowcy_glow'];
						$c = $wiersz['kodo'];
						$d = $wiersz['szamani'];
						$e = $wiersz['taureni'];
						$f = $wiersz['jezdzcy'];
						$rezultat->free();
					}
				}			
			}
			else {
				$sql = "select * from ludzie where nick='$user'";
				if ($rezultat = @$polaczenie->query($sql)) {
					$ilosc_wynikow = $rezultat->num_rows;
					if ($ilosc_wynikow == 1) {
						$wiersz = $rezultat->fetch_assoc();
							$a = $wiersz['miecznicy'];
							$b = $wiersz['strzelcy'];
							$c = $wiersz['kanonierzy'];
							$d = $wiersz['zyrokoptery'];
							$e = $wiersz['czarodziejki'];
							$f = $wiersz['rycerze'];
							$rezultat->free();
					}
				}
			}
		}
		$polaczenie->close();
		
		$rankingWojsko = 0;
		$tab = array($a,$b,$c,$d,$e,$f);
		$rankingWojsko = array_sum($tab);

		$rankingKoncowy = $rankingBadania + $rankingBudynki + $rankingWojsko;
		$_SESSION['rankingKoncowy'] = $rankingKoncowy;
	
		if ($polaczenie1->connect_errno!=0) {
			throw new Exception(mysqli_connect_errno());
		}
		else {
            $rezultat1 = $polaczenie1->query("update ranking set punkty='$rankingKoncowy' where nick='$user'");   
		}
		$polaczenie1->close();
		
		if ($polaczenie2->connect_errno!= 0) {
			throw new Exception(mysqli_connect_errno);
		}
		else {
			$rezultat2 = $polaczenie2->query("select * from ranking order by punkty desc");
			$i = 0;
			while ($rows = $rezultat2->fetch_assoc()){
				$rows_nick = $rows['nick'];
				if ($user == $rows_nick) {
					$_SESSION['ranking_gracza'] = $i+1;
				}
				$i++;
			}
		}
	}
	
	catch (Exception $e) {
		echo "Error: ".$e;
	}
	
	
	
?>