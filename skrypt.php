<?php 

function kolejka_budowy(){
    require "connect.php";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $nick=$_SESSION['user'];
    $rezultat = $polaczenie->query("select * from kolejki where nick='$nick'");
    
         while ( $rows = $rezultat->fetch_assoc() ) {
                        $_SESSION['budynek']=$rows['budowy'];
                        $_SESSION['data_budynku']=$rows['czas_budowy'];
                        $_SESSION['badanie']=$rows['badania'];
                        $_SESSION['data_badania']=$rows['czas_badania'];
         }
    $polaczenie->close();  
}


function obliczZasoby(){
    require_once "connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	$user = $_SESSION['user'];

	if (mysql_connect($host, $db_user, $db_password) && mysql_select_db($db_name)) {
		$wynik = mysql_query("select * from uzytkownicy where user ='$user'")
		or die ("Błąd w zapytaniu");
		//mysql_close();
	}
	else echo "Nie mogę połączyć się z bazą.";
		
	$timeOstatni=0;
	while($ostLog = mysql_fetch_array($wynik))         
		$timeOstatni= $ostLog['ostatnieLogowanie'];

    $rasa=$_SESSION['rasa'];
	$dataczas = new DateTime();
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	
	/*$ostatnie = DateTime::createFromFormat('Y-m-d H:i:s', $_SESSION['ostatnieLogowanie']);
	$roznica = $dataczas->diff($ostatnie);
	echo "<br/>Roznica: ".$roznica->format('%d dni, %h godz, %i min %s sek');*/
	
	$timeOstatni = strtotime($timeOstatni);
	$timeTeraz = strtotime(date('Y-m-d H:i:s'));
	$roznicaSekundy = $timeTeraz - $timeOstatni;
	$drewno=0;
    $zloto=0;
	//Mnoznik do zmiany w zaleznosci od technologii i robotnikow
        $techD=1+($_SESSION['t_drewna']/10);
        $techZ=1+($_SESSION['t_wydobycia']/10);
        
	$mnoznik_drewno = ($roznicaSekundy/20)*$_SESSION['robotnicy_drewno']*$techD;
	$mnoznik_zloto = ($roznicaSekundy/20)*$_SESSION['robotnicy_zloto']*$techZ;
    $pojemnosc_zloto=$_SESSION['magazynZlota_lvl']*5000;
    $pojemnosc_drewno=$_SESSION['magazynDrewna_lvl']*5000;
	$wynik= $polaczenie->query("select * from uzytkownicy where user ='$user'");
          while ( $rows = $wynik->fetch_assoc() ){
              $drewno=$rows['drewno'];
              $zloto=$rows['zloto'];
          }
    $nowe_drewno=$drewno+$mnoznik_drewno;
    $nowe_zloto=$zloto+$mnoznik_zloto;
    
    if($nowe_drewno>$pojemnosc_drewno){
        $nowe_drewno=$pojemnosc_drewno;
    }
    if($nowe_zloto>$pojemnosc_zloto){
        $nowe_zloto=$pojemnosc_zloto;
    }
   
    $chopki=$polaczenie->query("select * from $rasa where nick='$user'");
          while ( $chopeczki = $chopki->fetch_assoc() ){         
                $_SESSION['robotnicy_zloto']= $chopeczki['robotnicyZloto'];
                $_SESSION['robotnicy_drewno']= $chopeczki['robotnicyDrewno'];
                $_SESSION['robotnicy']= $chopeczki['robotnicy'];
        }
    $sql = $polaczenie->query("update uzytkownicy set drewno='$nowe_drewno', zloto='$nowe_zloto'where user = '$user'");
		$_SESSION['drewno'] = $nowe_drewno;
        $_SESSION['zloto']=$nowe_zloto;
    
    
    
	$sql = $polaczenie->query("update uzytkownicy set ostatnieLogowanie=now() where user = '$user'");
	//Teraz trzeba dodac jakies mnozniki, czas znajduje sie w $roznicaSekundy
    $polaczenie->close();
}
	
function oblicz($lvl,$budynek,$a){
    $pow=pow(1.5,$lvl);
    switch ($budynek){
        case 'castle': $zloto=500; $drewno=500; break;
        case 'barrack': $zloto=300; $drewno=350; break;
        case 'altar': $zloto=300; $drewno=150; break;
        case 'forge': $zloto=300; $drewno=300; break;
        case 'house': $zloto=250; $drewno=300; break;
        case 'magazyn_z': $zloto=200; $drewno=400; break;
        case 'magazyn_d': $zloto=200; $drewno=400; break;
        case 'badania': $zloto=400; $drewno=400; break;    
            
    }
    $zloto=round($zloto*$pow);
    $drewno=round($drewno*$pow);
    if ($a){
        echo "Złoto: ".$zloto."<br> Drewno: ".$drewno;
    }
    $zasob['a']=$zloto;
    $zasob['b']=$drewno;
    return $zasob;    
}

function czas($lvl, $budynek){
    $pow=pow(1.5,$lvl);
    
    switch($budynek){
        case 'castle': $minuty=(int)($pow*60); break;
        case 'barrack': $minuty=(int)($pow*50);break;
        case 'altar': $minuty=(int)($pow*40);break;
        case 'forge': $minuty=(int)($pow*50);break;
        case 'house': $minuty=(int)($pow*40);break;
        case 'magazyn_z': $minuty=(int)($pow*30);break;
        case 'magazyn_d': $minuty=(int)($pow*30);break;
        case 'badania': $minuty=(int)($pow*30);break;
    }
    
    $godziny=$minuty/60;
    $godziny=floor($godziny);
    $minuty=$minuty%60;

    if ($godziny==0){ 
        echo $minuty."min.";
    }
    else if ($minuty==0){ 
        echo $godziny."godź.";
    }
    else{ 
        echo $godziny."godź. <br>".$minuty."min.";
    }  
    
}

function wypisz($lvl,$budynek){
    $zasoby=oblicz($lvl,$budynek,false);  
    
    $zloto=$zasoby['a'];
    $drewno=$zasoby['b'];
    if($_SESSION['drewno']>=$drewno && $_SESSION['zloto']>=$zloto){
        echo  '<button type="button" class="btn btn-success">Ulepsz</button>';
    }
    else{
        echo  '<button type="button" class="btn btn-danger">Brak zasobów</button>';
    }
}





?>
