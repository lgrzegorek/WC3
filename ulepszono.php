<?php 
    session_start();
    $nick=$_SESSION['user'];    
    $co_ulepszylismy = explode("_",$_POST['post_co']);

    require_once "connect.php";
    
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0) {
        throw new Exception(mysqli_connect_errno());
    }

    else{
        if($co_ulepszylismy[0]=='budynki'){
            $bud=$co_ulepszylismy[1];
            $lvl=$_SESSION[$bud.'_lvl']+1;
            $rezultat=$polaczenie->query("update kolejki set budowy='0' where nick='$nick'");
            $rezultat1=$polaczenie->query("update budynki set $bud ='$lvl' where nick='$nick'");
            $_SESSION[$bud.'_lvl']=$lvl;
        }
        else {
            $bad="t_".$co_ulepszylismy[2];
            $lvl=$_SESSION[$bad]+1;
            $rezultat=$polaczenie->query("update kolejki set badania='0' where nick='$nick'");
            $rezultat=$polaczenie->query("update badania set $bad=$lvl where nick='$nick'");
            $_SESSION[$bad]=$lvl;
        }
        
    }
$polaczenie->close();

?>