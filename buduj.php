<?php 
    session_start();

    if ($_POST['post_akcja']=='ulepsz'){
        $nowe_drewno=$_SESSION['drewno']-$_POST['post_drewno'];
        $nowe_zloto=$_SESSION['zloto']-$_POST['post_zloto'];
    }
    else{
        $nowe_drewno=$_SESSION['drewno']+$_POST['post_drewno'];
        $nowe_zloto=$_SESSION['zloto']+$_POST['post_zloto'];
    }
    $nick=$_SESSION['user'];    
   

    switch($_POST['budynek']){
        case "0": $budynek='castle'; break;
        case "1": $budynek='barrack'; break;
        case "2": $budynek='altar'; break;
        case "3": $budynek='forge'; break;
        case "4": $budynek='house'; break;
        case "5": $budynek='magazynZlota'; break;
        case "6": $budynek='magazynDrewna'; break;
    }
    if ($_POST['post_akcja']=='ulepsz'){
        $czas_budowy=time()+60*$_POST['post_czas'];
        $czas_budowy=date('o-m-d G-i-s',$czas_budowy);
    }

require_once "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0) {
        throw new Exception(mysqli_connect_errno());
    }
    else{
        $rezultat=$polaczenie->query("update uzytkownicy set drewno='$nowe_drewno', zloto='$nowe_zloto' where user='$nick'");
        if ($_POST['post_akcja']=='ulepsz'){
            $rezultat1=$polaczenie->query("update kolejki set budowy='$budynek', czas_budowy='$czas_budowy' where nick='$nick'");
        }
        else{
              $rezultat1=$polaczenie->query("update kolejki set budowy='0' where nick='$nick'");
        }
        
        $_SESSION['drewno']=$nowe_drewno;
        $_SESSION['zloto']=$nowe_zloto;
    }
$polaczenie->close();

?>