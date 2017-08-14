<?php
    session_start();
    require_once "connect.php";
    $nowa_kolejka=$_POST['nowa_kolejka'];
    $wykonano=$_POST['post_wykonane'];
    $dodane_jednostki=explode("-",$wykonano);
    $nick=$_SESSION['user'];
    $czas=date('o-m-d G-i-s',time()); 
    if($nowa_kolejka){
        $sekundy=$_POST['post_sekundy'];
    }
    else{
        $sekundy=0;
    }
    if ($_SESSION['rasa']=="Orkowie"){
        $siepacze=$_SESSION['siepacze'];
        $lowcy_glow=$_SESSION['lowcy_glow'];
        $kodo=$_SESSION['kodo'];
        $szamani=$_SESSION['szamani'];
        $taureni=$_SESSION['taureni'];
        $jezdzcy=$_SESSION['jezdzcy'];
    }
    else{
        $miecznicy=$_SESSION['miecznicy'];
        $strzelcy=$_SESSION['strzelcy'];
        $kanonierzy=$_SESSION['kanonierzy'];
        $zyrokoptery=$_SESSION['zyrokoptery'];
        $czarodziejki=$_SESSION['czarodziejki'];
        $ryczerze=$_SESSION['rycerze'];
    }   
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0) {
        throw new Exception(mysqli_connect_errno());
    }
    else {
        for($i=0; $i<count($dodane_jednostki); $i++){
            switch($dodane_jednostki[$i]){
                case "siepacze": $siepacze++; break; 
                case "lowcy_glow":$lowcy_glow++; break;
                case "taureni":$taureni++; break;
                case "kodo": $kodo++; break;
                case "szamani": $szamani++; break;
                case "jezdzcy": $jezdzcy++; break;
                case "miecznicy": $miecznicy++; break;
                case "strzelcy": $strzelcy++; break;
                case "rycerze": $rycerze++;  break;
                case "kanonierzy":  $kanonierzy++; break;
                case "czarodziejki":  $czarodziejki++; break;
                case "zyrokoptery":  $zyrokoptery++; break;
            }
            
        }
        
        $rezultat = $polaczenie->query("update kolejki set jednostek='$nowa_kolejka', czas_jednostek='$czas', dodatkowe_sekundy='$sekundy' where nick='$nick'");
        if($_SESSION['rasa']=="Orkowie"){
            $rezultat2 = $polaczenie->query("update orkowie set siepacze='$siepacze', lowcy_glow='$lowcy_glow', taureni='$taureni', kodo='$kodo', szamani='$szamani', jezdzcy='$jezdzcy' where nick='$nick'");    
            $_SESSION['siepacze']=$siepacze;
            $_SESSION['lowcy_glow']=$lowcy_glow;
            $_SESSION['kodo']=$kodo;
            $_SESSION['szamani']=$szamani;
            $_SESSION['taureni']=$taureni;
            $_SESSION['jezdzcy']=$jezdzcy;
        }
        else{
             $rezultat2 = $polaczenie->query("update ludzie set miecznicy='$miecznicy', strzelcy='$strzelcy', rycerze='$rycerze', kanonierzy='$kanonierzy', czarodziejki='$czarodziejki', zyrokoptery='$zyrokoptery' where nick='$nick'");    
            $_SESSION['miecznicy']=$miecznicy;
            $_SESSION['strzelcy']=$strzelcy;
            $_SESSION['kanonierzy']=$kanonierzy;
            $_SESSION['zyrokoptery']=$zyrokoptery;
            $_SESSION['czarodziejki']=$czarodziejki;
            $_SESSION['rycerze']=$ryczerze;
        }
        
    }

    $polaczenie->close();

    


?>