<?php
session_start();
$rasa=$_SESSION['rasa'];
$nick=$_SESSION['user'];

$jednostki=$_POST['jednostki'];
$pozycja_do=$_POST['pozycja'];

switch($_POST['misja']){
    case 0: $misja="atakuj"; break; 
    case 1: $misja="transportuj"; break;
    case 2: $misja="stacjonuj"; break;
}

$parametr1=$_POST['parametr1'];
$parametr2=$_POST['parametr2'];

$zloto=0;
$drewno=0;

$pozycja_z=$_SESSION['wspolrzedna'];
$wspolrzedna_z[0]=floor($_SESSION['wspolrzedna']/6)+1;
$wspolrzedna_z[1]=$_SESSION['wspolrzedna']%6;

$wspolrzedna_do[0]=floor($pozycja_do/6)+1;
$wspolrzedna_do[1]=$pozycja_do%6;

$czas=1200*sqrt((pow($wspolrzedna_z[0]-$wspolrzedna_do[0],2)+pow($wspolrzedna_z[1]-$wspolrzedna_do[1],2)));

if ($misja=="atakuj"){
    $czas=round($czas*($parametr1/100));
}

$czas_przybycia=date('o-m-d G:i:s',(time()+$czas));
$czas_wymarszu=$czas_przybycia;

if ($misja=="transportuj"){
    $zloto=$parametr1;
    $drewno=$parametr2;
}
else{
    //echo date('o-m-d G-i-s',time($czas_przybycia));
    $czas_wymarszu=date('o-m-d G:i:s',$czas+time()+$parametr1*24*3600+$parametr2*3600);
}

$nowe_zloto=$_SESSION['zloto']-$zloto;
$nowe_drewno=$_SESSION['drewno']-$drewno;

require_once "connect.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
if ($polaczenie->connect_errno!=0) {
    throw new Exception(mysqli_connect_errno());
}
else {
    $polaczenie->query("insert into ruchy_wojsk values (NULL,'$pozycja_z','$pozycja_do','$misja','$zloto','$drewno',1,'$czas_przybycia', '$czas_wymarszu','$jednostki[0]','$jednostki[1]','$jednostki[2]','$jednostki[3]','$jednostki[4]','$jednostki[5]')");
    if ($rasa=="Orkowie"){
        echo "asasa ludszie";
        $siepacze=$_SESSION['siepacze']-$jednostki[0]; $_SESSION['siepacze']=$siepacze;
        $lowcy_glow=$_SESSION['lowcy_glow']-$jednostki[1]; $_SESSION['lowcy_glow']=$lowcy_glow;
        $taureni=$_SESSION['taureni']-$jednostki[2]; $_SESSION['taureni']=$taureni;
        $kodo=$_SESSION['kodo']-$jednostki[3]; $_SESSION['kodo']=$kodo;
        $szamani=$_SESSION['szamani']-$jednostki[4]; $_SESSION['szamani']=$szamani;
        $jezdzcy=$_SESSION['jezdzcy']-$jednostki[5]; $_SESSION['jezdzcy']=$jezdzcy;
        $polaczenie->query("update orkowie set siepacze='$siepacze',lowcy_glow='$lowcy_glow',taureni='$taureni', kodo='$kodo', szamani='$szamani', jezdzcy='$jezdzcy' where nick='$nick'");
    }
    else if ($rasa=="Ludzie"){
        $miecznicy=$_SESSION['miecznicy']-$jednostki[0]; $_SESSION['miecznicy']=$miecznicy;
        $strzelcy=$_SESSION['strzelcy']-$jednostki[1]; $_SESSION['strzelcy']=$strzelcy;
        $rycerze=$_SESSION['rycerze']-$jednostki[2]; $_SESSION['rycerze']=$rycerze;
        $kanonierzy=$_SESSION['kanonierzy']-$jednostki[3]; $_SESSION['kanonierzy']=$kanonierzy;
        $czarodziejki=$_SESSION['czarodziejki']-$jednostki[4];$_SESSION['czarodziejki']= $czarodziejki;
        $zyrokoptery=$_SESSION['zyrokoptery']-$jednostki[5]; $_SESSION['zyrokoptery']= $zyrokoptery;
        $polaczenie->query("update ludzie set miecznicy='$miecznicy', strzelcy='$strzelcy', rycerze='$rycerze', kanonierzy='$kanonierzy',czarodziejki='$czarodziejki', zyrokoptery='$zyrokoptery' where nick='$nick'");
    }
    if($drewno!=0 && $zloto!=0){
        $polaczenie->query("update uzytkownicy set zloto='$nowe_zloto', drewno='$nowe_drewno' where user='$nick'");
        
    }
}

$polaczenie->close();
?>