<?php 

function kolejka($co){
    require "connect.php";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $nick=$_SESSION['user'];
    $rezultat = $polaczenie->query("select * from kolejki where nick='$nick'");
    
         while ( $rows = $rezultat->fetch_assoc() ) {
      
                    if($co=="budynek") {
                        $_SESSION['budynek']=$rows['budowy']; 
                        $_SESSION['data_budynku']=$rows['czas_budowy'];
                    }
                    else if($co=="badanie"){
                        $_SESSION['badanie']=$rows['badania'];
                        $_SESSION['data_badania']=$rows['czas_badania'];
                    }
                    else if($co=="jednostki"){
                        $_SESSION['kolejka_jednostek']=$rows['jednostek'];  
                        $_SESSION['czas_jednostek']=$rows['czas_jednostek'];
                        $_SESSION['sekundy']=$rows['dodatkowe_sekundy'];
                    }
        }
    $polaczenie->close();  
}


function oblicz_zywnosc(){
    require "connect.php";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $nick=$_SESSION['user'];
    $rasa=$_SESSION['rasa'];
    $wspolrzedna=$_SESSION['wspolrzedna'];
    $rezultat = $polaczenie->query("select * from $rasa where nick='$nick'");
         while ( $rows = $rezultat->fetch_assoc() ) {
            if($rasa=="Orkowie"){
                $_SESSION['siepacze']=$rows['siepacze'];
                $_SESSION['lowcy_glow']=$rows['lowcy_glow'];
                $_SESSION['kodo']=$rows['kodo'];
                $_SESSION['szamani']=$rows['szamani'];
                $_SESSION['taureni']=$rows['taureni'];
                $_SESSION['jezdzcy']=$rows['jezdzcy'];
                $_SESSION['robotnicy'] = $rows['robotnicy'];
                $_SESSION['robotnicy_zloto']= $rows['robotnicyZloto'];
                $_SESSION['robotnicy_drewno']= $rows['robotnicyDrewno'];
                $_SESSION['zywnosc']=$_SESSION['siepacze']+$_SESSION['lowcy_glow']+$_SESSION['kodo']+$_SESSION['szamani']+$_SESSION['taureni']*2+$_SESSION['jezdzcy']*2+$_SESSION['robotnicy']+$_SESSION['robotnicy_drewno']+$_SESSION['robotnicy_zloto']; 
            }
            else{
                $_SESSION['miecznicy']=$rows['miecznicy'];
                $_SESSION['strzelcy']=$rows['strzelcy'];
                $_SESSION['kanonierzy']=$rows['kanonierzy'];
                $_SESSION['zyrokoptery']=$rows['zyrokoptery'];
                $_SESSION['czarodziejki']=$rows['czarodziejki'];
                $_SESSION['rycerze']=$rows['rycerze'];
                $_SESSION['robotnicy'] = $rows['robotnicy'];
                $_SESSION['robotnicy_zloto']= $rows['robotnicyZloto'];
                $_SESSION['robotnicy_drewno']= $rows['robotnicyDrewno'];
                 $_SESSION['zywnosc']=$_SESSION['miecznicy']+$_SESSION['strzelcy']+$_SESSION['kanonierzy']+$_SESSION['czarodziejki']+$_SESSION['rycerze']*2+$_SESSION['zyrokoptery']+$_SESSION['robotnicy']+$_SESSION['robotnicy_drewno']+$_SESSION['robotnicy_zloto']; 
             }
    $rezultat= $polaczenie->query("select * from ruchy_wojsk where z='$wspolrzedna'");
               while ( $rows = $rezultat->fetch_assoc() ) {
                    $_SESSION['zywnosc']+= $rows['jednostka_0']+$rows['jednostka_1']+$rows['jednostka_2']*2+$rows['jednostka_3']+$rows['jednostka_4']+$rows['jednostka_5'];
               }
                    
        }
    $polaczenie->close();  
}
function ruchy_wojsk(){
    require "connect.php";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $nick=$_SESSION['user'];
    $wspolrzedna=$_SESSION['wspolrzedna'];
    $rezulta = $polaczenie->query("select * from ruchy_wojsk where do='$wspolrzedna' and faza='1'");
        $i=0;
            while($rezultat = $rezulta->fetch_assoc()){ 
                $ruch[$i]['z']=$rezultat['z'];
                $ruch[$i]['misja']=$rezultat['misja'];   
                $ruch[$i]['czas_dotarcia']=$rezultat['czas_dotarcia'];   
                $ruch[$i]['czas_wymarszu']=$rezultat['czas_wymarszu']; 
                $_SESSION['ruchy_wojsk'][$i]['z']=$rezultat['z'];   
                $_SESSION['ruchy_wojsk'][$i]['misja']=$rezultat['misja'];   
                $_SESSION['ruchy_wojsk'][$i]['czas_dotarcia']=$rezultat['czas_dotarcia'];   
                $_SESSION['ruchy_wojsk'][$i]['czas_wymarszu']=$rezultat['czas_wymarszu'];   
                $_SESSION['ruchy_wojsk'][$i]['id']=$rezultat['id'];   
                $i++;
            }
        $rezulta = $polaczenie->query("select * from ruchy_wojsk where z='$wspolrzedna' or do='$wspolrzedna' and faza='0'");
            while($rezultat = $rezulta->fetch_assoc()){ 
                $ruch[$i]['do']=$rezultat['do'];   
                $ruch[$i]['misja']=$rezultat['misja'];   
                $ruch[$i]['czas_dotarcia']=$rezultat['czas_dotarcia'];   
                $ruch[$i]['czas_wymarszu']=$rezultat['czas_wymarszu'];      
                $ruch[$i]['zloto']=$rezultat['zloto'];   
                $ruch[$i]['drewno']=$rezultat['drewno'];   
                $ruch[$i]['faza']=$rezultat['faza'];   
                $ruch[$i]['jednostka_0']=$rezultat['jednostka_0'];   
                $ruch[$i]['jednostka_1']=$rezultat['jednostka_1'];   
                $ruch[$i]['jednostka_2']=$rezultat['jednostka_2'];   
                $ruch[$i]['jednostka_3']=$rezultat['jednostka_3'];   
                $ruch[$i]['jednostka_4']=$rezultat['jednostka_4'];   
                $ruch[$i]['jednostka_5']=$rezultat['jednostka_5']; 
                $_SESSION['ruchy_wojsk'][$i]['do']=$rezultat['do'];   
                $_SESSION['ruchy_wojsk'][$i]['z']=$rezultat['z'];   
                $_SESSION['ruchy_wojsk'][$i]['misja']=$rezultat['misja'];   
                $_SESSION['ruchy_wojsk'][$i]['czas_dotarcia']=$rezultat['czas_dotarcia'];   
                $_SESSION['ruchy_wojsk'][$i]['czas_wymarszu']=$rezultat['czas_wymarszu'];      
                $_SESSION['ruchy_wojsk'][$i]['zloto']=$rezultat['zloto'];   
                $_SESSION['ruchy_wojsk'][$i]['drewno']=$rezultat['drewno'];   
                $_SESSION['ruchy_wojsk'][$i]['faza']=$rezultat['faza'];   
                $_SESSION['ruchy_wojsk'][$i]['jednostka_0']=$rezultat['jednostka_0'];   
                $_SESSION['ruchy_wojsk'][$i]['jednostka_1']=$rezultat['jednostka_1'];   
                $_SESSION['ruchy_wojsk'][$i]['jednostka_2']=$rezultat['jednostka_2'];   
                $_SESSION['ruchy_wojsk'][$i]['jednostka_3']=$rezultat['jednostka_3'];   
                $_SESSION['ruchy_wojsk'][$i]['jednostka_4']=$rezultat['jednostka_4'];   
                $_SESSION['ruchy_wojsk'][$i]['jednostka_5']=$rezultat['jednostka_5'];   
                $_SESSION['ruchy_wojsk'][$i]['id']=$rezultat['id'];   
                $i++;
            }
        
    if($i==0){
        $_SESSION['ruchy_wojsk']=null;
    }
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


function sprawdz_mape(){
    require "connect.php";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $rezultat = $polaczenie->query("select * from uzytkownicy ");
    $i=0;
    $wspolrzedne;
         while ( $rows = $rezultat->fetch_assoc() ) {
            $wspolrzedne[$i][0]=$rows["user"];
            if(strlen($rows["wspolrzedna"])==1){
                $rows["wspolrzedna"]="0"+$rows["wspolrzedna"];
            }
            $wspolrzedne[$i][1]=$rows["wspolrzedna"];
            $i++;
         }
  
    array_multisort($wspolrzedne);
    $_SESSION['wspolrzedne']=$wspolrzedne;
    $polaczenie->close();  
}
	
function ilu_graczy(){
    $link = mysql_connect("localhost", "root", ""); 
    mysql_select_db("warcraft", $link);

    $result = mysql_query("SELECT * FROM uzytkownicy", $link);
    $num_rows = mysql_num_rows($result);

    echo "$num_rows";
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
