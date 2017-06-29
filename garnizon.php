<?php
	include ('menu2.php');
?>
<?php
    $user = $_SESSION['user'];
	$link = mysql_connect("localhost", "root", ""); 
    mysql_select_db("warcraft", $link);

    $result = mysql_query ("SELECT rasa FROM uzytkownicy WHERE user = '$user'", $link);
    $row = mysql_fetch_array( $result );
    $rasa = $row['rasa'];

    if ($rasa == 'Orkowie') {
	   $result = mysql_query ("SELECT siepacze, katapulty, lowcyGlow, szamani, doktorzyVodo, jezdzcy FROM orkowie WHERE nick = '$user'", $link);
	   $row = mysql_fetch_array( $result );

	   $siepacze = $row['siepacze'];
	   $katapulty = $row['katapulty'];
	   $lowcyGlow = $row['lowcyGlow'];
	   $szamani = $row['szamani'];
	   $doktorzyVodo = $row['doktorzyVodo'];
	   $jezdzcy = $row['jezdzcy'];
    }
    else {
        $result = mysql_query ("SELECT miecznicy, strzelcy, artyleria, kaplani, czarodziejki, rycerze FROM ludzie WHERE nick = '$user'", $link);
        $row = mysql_fetch_array( $result );

        $miecznicy = $row['miecznicy'];
        $strzelcy = $row['strzelcy'];
        $artyleria = $row['artyleria'];
        $kaplani = $row['kaplani'];
        $czarodziejki = $row['czarodziejki'];
        $rycerze = $row['rycerze'];
    }

?>
<h1> Twoje wojska: </h1>
<div class="jednostka">

        <?php if ($rasa == 'Orkowie') : ?>
            <b> Siepacz </b> <br><br>
            <img src="Grafika/orkowie/jednostki/grunt.png">
            <div class="parametry">
                Ilość: <?php echo $siepacze?><br>
            </div>
        <?php else : ?>
            <b> Miecznik </b> <br><br>
            <img src="Grafika/ludzie/jednostki/footman.png">
            <div class="parametry">
                Ilość: <?php echo $miecznicy?><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka">

        <?php if ($rasa == 'Orkowie') : ?>
            <b> Kodo </b> <br><br>
            <img src="Grafika/orkowie/jednostki/kodo.png">
            <div class="parametry">
                Ilość: <?php echo $katapulty?><br>
            </div>
        <?php else : ?>
            <b> Strzelec </b> <br><br>
            <img src="Grafika/ludzie/jednostki/sniper.png">
            <div class="parametry">
                Ilość: <?php echo $miecznicy?><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka">

        <?php if ($rasa == 'Orkowie') : ?>
            <b> Łowcy Głów </b> <br><br>
            <img src="Grafika/orkowie/jednostki/headhunter.png">
            <div class="parametry">
                Ilość: <?php echo $lowcyGlow?><br>
            </div>
        <?php else : ?>
            <b> Kanonierzy </b> <br><br>
            <img src="Grafika/ludzie/jednostki/canon.png">
            <div class="parametry">
                Ilość: <?php echo $artyleria?><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka">

        <?php if ($rasa == 'Orkowie') : ?>
            <b> Szamani </b> <br><br>
            <img src="Grafika/orkowie/jednostki/shaman.png">
            <div class="parametry">
                Ilość: <?php echo $szamani?><br>
            </div>
        <?php else : ?>
            <b> Kapłani </b> <br><br>
            <img src="Grafika/ludzie/jednostki/priest.png">
            <div class="parametry">
                Ilość: <?php echo $kaplani?><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka">

        <?php if ($rasa == 'Orkowie') : ?>
            <b> Doktorzy Voodoo </b> <br><br>
            <img src="Grafika/orkowie/jednostki/vodo.png">
            <div class="parametry">
                Ilość: <?php echo $doktorzyVodo?><br>
            </div>
        <?php else : ?>
            <b> Jeźdźcy gryfa </b> <br><br>
            <img src="Grafika/ludzie/jednostki/gryph.png">
            <div class="parametry">
                Ilość: <?php echo $czarodziejki?><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka">

        <?php if ($rasa == 'Orkowie') : ?>
            <b> Jeźdźcy wilków </b> <br><br>
            <img src="Grafika/orkowie/jednostki/rider.png">
            <div class="parametry">
                Ilość: <?php echo $jezdzcy?><br>
            </div>
        <?php else : ?>
            <b> Rycerze </b> <br><br>
            <img src="Grafika/ludzie/jednostki/knight.png">
            <div class="parametry">
                Ilość: <?php echo $rycerze?><br>
            </div>
        <?php endif; ?>

</div> 

<?php
	include ('stopka.php');
?>