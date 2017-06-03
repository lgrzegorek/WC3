<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="Stylesheet" type="text/css" href="style.css" />    
    <script src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
</head>
<body>
<div id="container">
        <div id="top">
            <div class="tpanel"><div id=clock></div></div>
            <div class="tpanel">b</div>
            <div class="tpanel">ac</div>
            <div class="tpanel">d</div>
            <div class="tpanel">e</div>
        </div>
        <div style="clear: both"></div>
        <div id="nav">
            <ul>
                <a href="index.php"><li>Strona główna</li></a>
                <a href="ogrze.php"><li>O grze</li></a>
                <a href="otworcach.php"><li>O twórcach</li></a>
                <a href="regulamin.php"><li>Regulamin</li></a>
                <a href="opinie.php"><li>Opinie</li></a>
                <a href="zrzuty.php"><li>Zrzuty ekranu</li></a>
                <a href="rejestracja.php"><li>Zarejestruj się</li></a>
            </ul>
        </div>
        
     <div id="center">
