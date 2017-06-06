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
            <div class="tpanel">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                    <div id="id01" class="modal">
                        <form class="modal-content animate" action="/action_page.php">
                            <div class="container">
                              <label><b>Username</b></label>
                              <input type="text" placeholder="Login" name="uname" required>

                              <label><b>Password</b></label>
                              <input type="password" placeholder="Hasło" name="psw" required>
                              <input type="checkbox" checked="checked"> Remember me
                            </div>

                            <div class="container" style="background-color: rgb(204, 102, 0";>
                              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                              <button type="submit" class="login2">Login</button>
                              <span class="psw"><a href="#">Forgot password?</a></span>
                            </div>
                        </form>
                    </div>
            </div>
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
                <a href="zrzuty.php"><li>Tapety</li></a>
                <a href="rejestracja.php"><li>Zarejestruj się</li></a>
            </ul>
        </div>
        
     <div id="center">
