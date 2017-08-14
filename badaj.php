<?php 
session_start();
    $zasob=round(pow(1.5,$_POST['post_lvl'])*400);
    if ($_POST['post_akcja']=='ulepsz'){
        $nowe_drewno=$_SESSION['drewno']-$zasob;
        $nowe_zloto=$_SESSION['zloto']-$zasob;
    }
    else{
        $nowe_drewno=$_SESSION['drewno']+$zasob;
        $nowe_zloto=$_SESSION['zloto']+$zasob;
    }
 
    $nick=$_SESSION['user'];  
    switch($_POST['badanie']){
        case "0": $badanie='t_drewna';    break;
        case "1": $badanie='t_wydobycia';   break;
        case "2": $badanie='t_uzbrojenia';   break;
        case "3": $badanie='t_broniPalnej'; break;
        case "4": $badanie='t_opancerzenia';  break;
        case "5": $badanie='t_opancerzenia1';   break;
        case "6": $badanie='t_budownictwa';  break;
    }
    $czas_ul=round(pow(1.5,$_SESSION[$badanie]))*2;
    $czas_badania=time()+60*$czas_ul;
    $czas_badania=date('o-m-d G-i-s',$czas_badania);
require_once "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0) {
        throw new Exception(mysqli_connect_errno());
    }
    else{
        $rezultat=$polaczenie->query("update uzytkownicy set drewno='$nowe_drewno', zloto='$nowe_zloto' where user='$nick'");
        if ($_POST['post_akcja']=='ulepsz'){
            $rezultat1=$polaczenie->query("update kolejki set badania='$badanie', czas_badania='$czas_badania' where nick='$nick'");
        }
        else{
              $rezultat1=$polaczenie->query("update kolejki set badania='0' where nick='$nick'");
        }
        $_SESSION['drewno']=$nowe_drewno;
        $_SESSION['zloto']=$nowe_zloto;
    }
$polaczenie->close();


?>