<?php 
    session_start();
    $nick=$_SESSION['user']; 
    $czas=date('o-m-d G-i-s',time()); 
    require_once "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        if ($polaczenie->connect_errno!=0) {
            throw new Exception(mysqli_connect_errno());
        }
        else{
            $rezultat1=$polaczenie->query("update kolejki set czas_jednostek='$czas' where nick='$nick'");
        }
    $polaczenie->close();


?>