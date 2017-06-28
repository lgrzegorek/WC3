<?php
	include ('menu2.php');
?>
<?php

	$link = mysql_connect("localhost", "root", ""); 
    mysql_select_db("warcraft", $link);

	$result = mysql_query ("SELECT siepacze, katapulty, lowcyGlow, szamani, doktorzyVodo, jezdzcy FROM orkowie WHERE nick = 'alek'", $link);
	$row = mysql_fetch_array( $result );
	$siepacze = $row['siepacze'];
	$katapulty = $row['katapulty'];
	$lowcyGlow = $row['lowcyGlow'];
	$szamani = $row['szamani'];
	$doktorzyVodo = $row['doktorzyVodo'];
	$jezdzcy = $row['jezdzcy'];

?>
<h1> Twoje wojska: </h1>
<div class="jednostka">
    <b> Siepacz </b> <br><br>
    <img src="Grafika/orkowie/jednostki/grunt.png">
    <div class="parametry">
        Ilość: <?php echo $siepacze?><br>
    </div>
</div> 

<div class="jednostka">
    <b> Kodo </b> <br><br>
    <img src="Grafika/orkowie/jednostki/kodo.png">
    <div class="parametry">
        Ilość: <?php echo $katapulty?><br>
    </div>
</div> 

<div class="jednostka">
    <b> Łowcy Głów </b> <br><br>
    <img src="Grafika/orkowie/jednostki/headhunter.png">
    <div class="parametry">
        Ilość: <?php echo $lowcyGlow?><br>
    </div>
</div> 

<div class="jednostka">
    <b> Szamani </b> <br><br>
    <img src="Grafika/orkowie/jednostki/shaman.png">
    <div class="parametry">
        Ilość: <?php echo $szamani?><br>
    </div>
</div> 

<div class="jednostka">
    <b> Doktorzy Voodoo </b> <br><br>
    <img src="Grafika/orkowie/jednostki/vodo.png">
    <div class="parametry">
        Ilość: <?php echo $doktorzyVodo?><br>
    </div>
</div> 

<div class="jednostka">
    <b> Jeźdźcy </b> <br><br>
    <img src="Grafika/orkowie/jednostki/rider.png">
    <div class="parametry">
        Ilość: <?php echo $jezdzcy?><br>
    </div>
</div> 

<?php
	include ('stopka.php');
?>