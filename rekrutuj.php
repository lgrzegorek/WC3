<?php
    session_start();
    $zloto=$_POST['post_zloto'];
    $drewno=$_POST['post_drewno'];
    $nick=$_SESSION['user'];
    $czas=date('o-m-d G-i-s',time());    
    $jednostka="";
    if($_SESSION['rasa']=="Ludzie"){
        switch($_POST['post_jednostka']){
            case "0": $jednostka="miecznicy"; break;    
            case "1": $jednostka="strzelcy"; break;    
            case "2": $jednostka="rycerze"; break;    
            case "3": $jednostka="kanonierzy"; break;    
            case "4": $jednostka="czarodziejki"; break;    
            case "5": $jednostka="zyrokoptery"; break;    
        }
    }
    else{
        switch($_POST['post_jednostka']){
            case "0": $jednostka="siepacze"; break;    
            case "1": $jednostka="lowcy_glow"; break;    
            case "2": $jednostka="taureni"; break;    
            case "3": $jednostka="kodo"; break;    
            case "4": $jednostka="szamani"; break;    
            case "5": $jednostka="jezdzcy"; break;        
        }
    }
    require_once "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0) {
        throw new Exception(mysqli_connect_errno());
    }
    else {
        $rezultat = $polaczenie->query("update uzytkownicy set zloto='$zloto', drewno='$drewno' where user='$nick'");
        $rezultat2 = $polaczenie->query("select * from kolejki where nick='$nick'");
        if ($rezultat2){
            while ( $rows = $rezultat2->fetch_assoc() ) {
                $kolejka=$rows['jednostek'];
            }
        }
        if($kolejka=="0"){
            $kolejka="";    
        }
        for($i=0; $i<$_POST['post_ile']; $i++){    
            $kolejka.=$jednostka."-";   
        }
        $rezultat = $polaczenie->query("update kolejki set jednostek='$kolejka',czas_jednostek='$czas' where nick='$nick'");
    }
    $_SESSION['zloto']=$zloto;
    $_SESSION['drewno']=$drewno;
    
    $polaczenie->close();




?>