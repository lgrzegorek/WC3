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
        <div class="col-md-2">Rankingi</div>
        <div class="col-md-2">Logo</div>
        <div class="col-md-2">Wiadomości</div>
        <div class="col-md-2">Aktywni</div>
      <!--  <div class="col-md-2">Notatki</div> -->
        
    </div>        
</div>
    <div id="top_panel">
        <div id="logo"><img src="Grafika/logo.jpg"></div>
        <div id="zasoby"> 
            <div class="zasob" style="color:gold;">  <img src="Grafika/icon/gold.png"> Złoto: 203</div> 
            <div class="zasob" style="color:darkgoldenrod;"> <img src="Grafika/icon/wood.png">Drewno: 2402 </div>
            <div class="zasob" style="color:coral;"><img src="Grafika/icon/meat.png">Żywność: 23/100</div>
        </div>
    </div>
    
    <div style="clear:both"></div>
        <div id="nav">
                <a href="podglad.php"><div id="button">Podgląd</div></a>
                <a href="surowce.php"><div id="button">Surowce</div></a>
                <a href="budynki.php"><div id="button">Budynki</div></a>
                <a href="badania.php"><div id="button">Badania</div></a>
                <a href="koszary.php"><div id="button">Koszary</div></a>
                <a href="garnizon.php"><div id="button">Garnizon</div></a>
                <a href="obrona.php"><div id="button">Obrona</div></a>
                <a href="mapa.php"><div id="button">Mapa</div></a>
        </div>
        
     <div id="center" style="margin-top:1%;">
     