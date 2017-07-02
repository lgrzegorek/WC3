<?php
    session_start();
    $zloto=$_POST['postzloto'];
    $drewno=$_POST['postdrewno'];
    $wszyscy=$_POST['postwszyscy'];
    $rasa=$_SESSION['rasa'];
    $nick=$_SESSION['user'];
    require_once "connect.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0) {
        throw new Exception(mysqli_connect_errno());
    }
    else {
        $rezultat = $polaczenie->query("update $rasa set robotnicyZloto='$zloto', robotnicyDrewno='$drewno', robotnicy='$wszyscy' where nick='$nick'");
        echo "update '$rasa' set robotnicyZloto='$zloto' robotnicyDrewno='$drewno' robotnicy='$wszyscy' where nick='$nick'";
    }
    $polaczenie->close();
?>