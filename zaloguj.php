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
					$_SESSION['rasa'] = $wiersz['rasa'];
					//$_SESSION['dnipremium'] = $wiersz['dnipremium'];
				$rezultat2 = $polaczenie->query("select * from budynki where nick='$login'");
                if($rezultat2){ 
                    while ( $rows = $rezultat2->fetch_assoc() ) {
                        $_SESSION['castle_lvl']=$rows['castle'];
                        $_SESSION['altar_lvl']=$rows['altar'];
                        $_SESSION['house_lvl']=$rows['house'];
                        $_SESSION['forge_lvl']=$rows['forge'];
                        $_SESSION['barrack_lvl']=$rows['barrack'];
                        $_SESSION['forge_lvl']=$rows['forge'];
                        $_SESSION['max_zywnosc'] = $rows['house']*10;
                        $_SESSION['magazyn_zlota']= $rows['magazynZlota'];
                        $_SESSION['magazyn_drewna']= $rows['magazynDrewna'];
                    }
                       $rezultat2->free_result();
					
				}
                $rezultat2 = $polaczenie->query("select * from badania where nick='$login'");
                    if ($rezultat2){
                       while ( $rows = $rezultat2->fetch_assoc() ) {
                        $_SESSION['t_drewna']=$rows['Tdrewna'];
                        $_SESSION['t_wydobycia']=$rows['Twydobycia'];
                        $_SESSION['t_uzbrojenia']=$rows['Tuzbrojenia'];
                        $_SESSION['t_bronipalnej']=$rows['TbroniPalnej'];
                        $_SESSION['t_opancerzenia']=$rows['Topancerzenia'];
                        $_SESSION['t_opancerzenia1']=$rows['Topancerzenia1'];
                        $_SESSION['t_budownictwa'] = $rows['Tbudownictwa'];
                    }
                        unset($_SESSION['blad']);
					   $rezultat2->free_result();
					   $rezultat->free_result();
                    }
                    if($_SESSION['rasa']=='Orkowie'){    
                        $rezultat2 = $polaczenie->query("select * from orkowie where nick='$login'");
                        if($rezultat2){ 
                            while ( $rows = $rezultat2->fetch_assoc() ) {
                                $_SESSION['siepacze']=$rows['siepacze'];
                                $_SESSION['lowcy_glow']=$rows['lowcyGlow'];
                                $_SESSION['katapulty']=$rows['katapulty'];
                                $_SESSION['szamani']=$rows['szamani'];
                                $_SESSION['doktorzy']=$rows['doktorzyVodo'];
                                $_SESSION['jezdzcy']=$rows['jezdzcy'];
                                $_SESSION['robotnicy'] = $rows['robotnicy'];
                                $_SESSION['zywnosc']=$_SESSION['siepacze']*2+$_SESSION['lowcy_glow']*1+$_SESSION['katapulty']*1+$_SESSION['szamani']*2+$_SESSION['doktorzy']*2+$_SESSION['jezdzcy']*2+$_SESSION['robotnicy']; 
                            }
                        $rezultat2->free_result();
                        }
                    }
                    else{
                        $rezultat2 = $polaczenie->query("select * from ludzie where nick='$login'");
                        if($rezultat2){ 
                            while ( $rows = $rezultat2->fetch_assoc() ) {
                                $_SESSION['miecznicy']=$rows['miecznicy'];
                                $_SESSION['strzelcy']=$rows['strzelcy'];
                                $_SESSION['kanonierzy']=$rows['artyleria'];
                                $_SESSION['kaplani']=$rows['kaplani'];
                                $_SESSION['czarodziejki']=$rows['czarodziejki'];
                                $_SESSION['rycerze']=$rows['rycerze'];
                                $_SESSION['robotnicy'] = $rows['robotnicy'];
                                $_SESSION['zywnosc']=$_SESSION['miecznicy']*2+$_SESSION['strzelcy']*1+$_SESSION['kanonierzy']*1+$_SESSION['kaplani']*2+$_SESSION['czarodziejki']*2+$_SESSION['rycerze']*2+$_SESSION['robotnicy']; 
                            }
                        $rezultat2->free_result();
                        }
                        
                    }
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
