<?php 
    session_start();
    $nowe_drewno=$_SESSION['drewno']-$_POST['post_drewno'];
    $nowe_zloto=$_SESSION['zloto']-$_POST['post_zloto'];
    $nick=$_SESSION['user'];    
    $nowy_lvl=$_POST['post_lvl']+1;

    switch($_POST['budynek']){
        case "0": $budynek='castle';   $_SESSION['castle_lvl']=$nowy_lvl; break;
        case "1": $budynek='barrack';   $_SESSION['barrack_lvl']=$nowy_lvl; break;
        case "2": $budynek='altar';    $_SESSION['altar_lvl']=$nowy_lvl;break;
        case "3": $budynek='forge';    $_SESSION['forge_lvl']=$nowy_lvl;break;
        case "4": $budynek='house';    $_SESSION['house_lvl']=$nowy_lvl;break;
        case "5": $budynek='magazynZlota';    $_SESSION['zloto_lvl']=$nowy_lvl;break;
        case "6": $budynek='magazynDrewna';    $_SESSION['drewno_lvl']=$nowy_lvl;break;
    }

require_once "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0) {
        throw new Exception(mysqli_connect_errno());
    }
    else{
        
        
        $rezultat=$polaczenie->query("update uzytkownicy set drewno='$nowe_drewno', zloto='$nowe_zloto' where user='$nick'");
        $rezultat2=$polaczenie->query("update budynki set $budynek='$nowy_lvl' where nick='$nick'");
        $_SESSION['drewno']=$nowe_drewno;
        $_SESSION['zloto']=$nowe_zloto;
    }
$polaczenie->close();

?>