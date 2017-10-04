<?php
	include ('menu2.php');
?>

<?php

	$link = mysqli_connect('localhost', 'root', '', 'warcraft');

	$result = mysqli_query($link, 'SELECT user, wspolrzedna FROM uzytkownicy');

	$pozycja = [];									// pobieram wszystkich graczy i odpowiadajace im wpolrzedne do zmiennych $pozycja[wsp] i $gracz[wsp]
	$gracz = [];
	while ($row = mysqli_fetch_array($result)) {
		$pozycja[$row[1]] = $row[1];
		$gracz[$row[1]] = $row[0];
	}

	for ($x = 1 ; $x <= 36 ; $x++){					// nulluje resztę zmiennych z powyżej, które nie zostały zdefiniowane bo nie ma graczy o tych wsp.
		if ( !isset($gracz[$x]) ){
			$gracz[$x] = null;
		}
	}
?>
	<div id="mapa">
	</div>
	
<?php
	include ('stopka.php');
?>

<script>
	 for(var i=0; i<36; i++){
		var img = "Grafika/mapa/image_part_0" + (i+1) + ".jpg";
        $('#mapa').append("<div id='kolejka_jednostki"+i+"' class='mapakolejka' style='background-image: url("+img+")'>"+i+"</div>");
    }
</script>