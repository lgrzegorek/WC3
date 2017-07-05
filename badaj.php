<?php 
session_start();
    $zasob=round(pow(1.5,$_POST['post_lvl'])*400);
    $nick=$_SESSION['user'];  
    $nowy_lvl=$_POST['post_lvl']+1;
    switch($_POST['badanie']){
        case "0": $badanie='Tdrewna';   $_SESSION['t_drewna']=$nowy_lvl; break;
        case "1": $badanie='Twydobycia';   $_SESSION['t_wydobycia']=$nowy_lvl; break;
        case "2": $badanie='Tuzbrojenia';    $_SESSION['t_uzbrojenia']=$nowy_lvl;break;
        case "3": $badanie='TbroniPalnej';    $_SESSION['t_bronipalnej']=$nowy_lvl;break;
        case "4": $badanie='Topancerzenia';    $_SESSION['t_opancerzenia']=$nowy_lvl;break;
        case "5": $badanie='Topancerzenia1';    $_SESSION['t_opancerzenia1']=$nowy_lvl;break;
        case "6": $badanie='Tbudownictwa';    $_SESSION['t_budownictwa']=$nowy_lvl;break;
    }
    $nowe_drewno=$_SESSION['drewno']-$zasob;
    $nowe_zloto=$_SESSION['zloto']-$zasob;
require_once "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0) {
        throw new Exception(mysqli_connect_errno());
    }
    else{
        $rezultat=$polaczenie->query("update uzytkownicy set drewno='$nowe_drewno', zloto='$nowe_zloto' where user='$nick'");
        $rezultat2=$polaczenie->query("update badania set $badanie='$nowy_lvl' where nick='$nick'");
        $_SESSION['drewno']=$nowe_drewno;
        $_SESSION['zloto']=$nowe_zloto;
    }
$polaczenie->close();


?>