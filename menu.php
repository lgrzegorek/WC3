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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Stylesheet" type="text/css" href="style.css" />    
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body background = "Grafika/tlo.jpg">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">Data</div>
                <div class="col-md-2"><div id=clock></div></div>
                <div class="col-md-2">Imieniny logo</div>
                <div class="col-md-2">Zarejestrowani</div>
                <div class="col-md-2">Zaloguj</div>
                <div class="col-md-2">Aktywni</div>
            </div>
        </div>

        <div id="nav">
                <a href="index.php"><div id="button">Strona główna</div></a>
                <a href="ogrze.php"><div id="button">O grze</div></a>
                <a href="otworcach.php"><div id="button">O twórcach</div></a>
                <a href="regulamin.php"><div id="button">Regulamin</div></a>
                <a href="opinie.php"><div id="button">Opinie</div></a>
                <a href="zrzuty.php"><div id="button">Zrzuty ekranu</div></a>
                <a href="rejestracja.php"><div id="button">Zarejestruj się</div></a>
        </div>
        
     <div id="center">