<?php
	//session_start();
	function suma($ostatnia) {
		if ($ostatnia == 1)
			return 1;
		else 
			return $ostatnia + suma($ostatnia-1);
	}
	
	
	require_once "connect.php";
	$rankingBadania = suma($_SESSION['t_drewna']) + ($_SESSION['t_uzbrojenia']) + ($_SESSION['t_wydobycia']) + ($_SESSION['t_broniPalnej']) + ($_SESSION['t_opancerzenia']) + ($_SESSION['t_opancerzenia1']) + ($_SESSION['t_budownictwa']);
	
	$rankingBudynki = ($_SESSION['castle_lvl']) + ($_SESSION['altar_lvl']) + ($_SESSION['house_lvl']) + ($_SESSION['forge_lvl']) + ($_SESSION['barrack_lvl']) + ($_SESSION['magazynZlota_lvl']) + ($_SESSION['magazynDrewna_lvl']);
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	$a=0;
	$b=0;
	$c=0;
	$d=0;
	$e=0;
	$f=0;
	if ($polaczenie->connect_errno != 0) {
		echo "Error: ".$polaczenie->connect_errno;
	}
	else {
		$user = $_SESSION['user'];
		$rasa = $_SESSION['rasa'];
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
	$rankingWojsko = 0;
	$tab = array($a,$b,$c,$d,$e,$f);
	$rankingWojsko = array_sum($tab);

	$rankingKoncowy = $rankingBadania + $rankingBudynki + $rankingWojsko;
	$_SESSION['rankingKoncowy'] = $rankingKoncowy;
	
?>