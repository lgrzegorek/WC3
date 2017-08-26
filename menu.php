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
    <link rel="stylesheet" type="text/css" href="styleee.css" />    
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"><div id="datka"></div></div>
        <div class="col-md-2"><div id="clock"></div></div>
        <div class="col-md-2"><div id="imieniny"></div></div>
        <!-- skrytp wczytujący ilosc zarejestrowanych użytkowników z bazy danych -->
        <div class="col-md-2">Zarejestrowani gracze: 
            <?php
            include("skrypt.php");
            ilu_graczy();

            ?>
        </div>
        <div class="col-md-2">
            <button onclick="document.getElementById('id01').style.display='block'" style="background-color: rgba(0,0,0,0.5);">Login</button>
                <div id="id01" class="modal">
                    <form class="modal-content animate" action="zaloguj.php" method="post">
                        <div class="container">
                            <label><b>Użytkownik</b></label><br>
                            <input type="text" placeholder="Login" name="login" required><br>
                            <label><b>Hasło</b></label><br>
                            <input type="password" placeholder="Hasło" name="haslo" required><br>
                            <input type="checkbox" checked="checked">Zapamiętaj logowanie<br>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'"   class="cancelbtn">Anuluj</button>
                            <input type="submit" class="login2" value="Login"><br>
                            
                        </div>
                    </form>
                </div>
            </div>
        <div class="col-md-2">
            Aktywni
        </div>
    </div>        
</div>

        <div id="nav">
                <a href="index.php"><div id="button">Strona główna</div></a>
                <a href="ogrze.php"><div id="button">O grze</div></a>
                <a href="otworcach.php"><div id="button">O twórcach</div></a>
                <a href="regulamin.php"><div id="button">Regulamin</div></a>
                <a href="opinie.php"><div id="button">Opinie</div></a>
                <a href="zrzuty.php"><div id="button">Tapety</div></a>
                <a href="rejestracja.php"><div id="button">Zarejestruj się</div></a>
        </div>
        
     <div id="center">
     