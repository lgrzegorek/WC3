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
            <div class="tpanel"><div id="clock"></div></div>
            <div class="tpanel">b</div>
            <div class="tpanel">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                    <div id="id01" class="modal">
                        <form class="modal-content animate" action="zaloguj.php" method="post">
                            <div class="container">
                              <label><b>Username</b></label>
                              <input type="text" placeholder="Login" name="login" required>

                              <label><b>Password</b></label>
                              <input type="password" placeholder="Hasło" name="haslo" required>
                              <input type="checkbox" checked="checked"> Remember me

                            
                              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                              <input type="submit" class="login2" value="Login">
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
                <a href="podglad.php"><li>Podgląd</li></a>
                <a href="surowce.php"><li>Surowce</li></a>
                <a href="budynki.php"><li>Budynki</li></a>
                <a href="badania.php"><li>Badania</li></a>
                <a href="koszary.php"><li>Koszary</li></a>
                <a href="garnizon.php"><li>Garnizon</li></a>
                <a href="obrona.php"><li>Obrona</li></a>
                <a href="mapa.php"><li>Mapa</li></a>
            </ul>
        </div>
        
     <div id="center">