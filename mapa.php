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
<h1> Twoja pozycja na mapie to: <?php echo $_SESSION['wspolrzedna']?> (numery kolejno rzędami)</h1><br>

<div id="map" style="float: left">
<img src="Grafika/mapfull.png" alt="Cities" usemap="#citymap" class="map">
</div>

<map name="citymap">
	<area shape="rect" coords="22,22,249,193" href=<?php if($_SESSION['wspolrzedna'] == 1): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[1]?>" data-name="<?php echo $gracz[1]?>">
	<area shape="rect" coords="250,22,478,193" href=<?php if($_SESSION['wspolrzedna'] == 2): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[2]?>" data-name="<?php echo $gracz[2]?>">
	<area shape="rect" coords="480,22,708,193" href=<?php if($_SESSION['wspolrzedna'] == 3): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[3]?>" data-name="<?php echo $gracz[3]?>">
	<area shape="rect" coords="710,22,938,193" href=<?php if($_SESSION['wspolrzedna'] == 4): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[4]?>" data-name="<?php echo $gracz[4]?>">
	<area shape="rect" coords="940,22,1168,193" href=<?php if($_SESSION['wspolrzedna'] == 5): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[5]?>" data-name="<?php echo $gracz[5]?>">
	<area shape="rect" coords="1170,22,1400,193" href=<?php if($_SESSION['wspolrzedna'] == 6): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[6]?>" data-name="<?php echo $gracz[6]?>">

	<area shape="rect" coords="22,198,249,367" href=<?php if($_SESSION['wspolrzedna'] == 7): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[7]?>" data-name="<?php echo $gracz[7]?>">
	<area shape="rect" coords="250,198,478,367" href=<?php if($_SESSION['wspolrzedna'] == 8): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[8]?>" data-name="<?php echo $gracz[8]?>">
	<area shape="rect" coords="480,198,708,367" href=<?php if($_SESSION['wspolrzedna'] == 9): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[9]?>" data-name="<?php echo $gracz[9]?>">
	<area shape="rect" coords="710,198,938,367" href=<?php if($_SESSION['wspolrzedna'] == 10): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[10]?>" data-name="<?php echo $gracz[10]?>">
	<area shape="rect" coords="940,198,1168,367" href=<?php if($_SESSION['wspolrzedna'] == 11): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[11]?>" data-name="<?php echo $gracz[11]?>">
	<area shape="rect" coords="1170,198,1400,367" href=<?php if($_SESSION['wspolrzedna'] == 12): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[12]?>" data-name="<?php echo $gracz[12]?>">

	<area shape="rect" coords="22,370,249,540" href=<?php if($_SESSION['wspolrzedna'] == 13): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[13]?>" data-name="<?php echo $gracz[13]?>">
	<area shape="rect" coords="250,370,478,540" href=<?php if($_SESSION['wspolrzedna'] == 14): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[14]?>" data-name="<?php echo $gracz[14]?>">
	<area shape="rect" coords="480,370,708,540" href=<?php if($_SESSION['wspolrzedna'] == 15): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[15]?>" data-name="<?php echo $gracz[15]?>">
	<area shape="rect" coords="710,370,938,540" href=<?php if($_SESSION['wspolrzedna'] == 16): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[16]?>" data-name="<?php echo $gracz[16]?>">
	<area shape="rect" coords="940,370,1168,540" href=<?php if($_SESSION['wspolrzedna'] == 17): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[17]?>" data-name="<?php echo $gracz[17]?>">
	<area shape="rect" coords="1170,370,1400,540" href=<?php if($_SESSION['wspolrzedna'] == 18): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[18]?>" data-name="<?php echo $gracz[18]?>">

	<area shape="rect" coords="22,543,249,713" href=<?php if($_SESSION['wspolrzedna'] == 19): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[19]?>" data-name="<?php echo $gracz[19]?>">
	<area shape="rect" coords="250,543,478,713" href=<?php if($_SESSION['wspolrzedna'] == 20): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[20]?>" data-name="<?php echo $gracz[20]?>">
	<area shape="rect" coords="480,543,708,713" href=<?php if($_SESSION['wspolrzedna'] == 21): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[21]?>" data-name="<?php echo $gracz[21]?>">
	<area shape="rect" coords="710,543,938,713" href=<?php if($_SESSION['wspolrzedna'] == 22): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[22]?>" data-name="<?php echo $gracz[22]?>">
	<area shape="rect" coords="940,543,1168,713" href=<?php if($_SESSION['wspolrzedna'] == 23): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[23]?>" data-name="<?php echo $gracz[23]?>">
	<area shape="rect" coords="1170,543,1400,713" href=<?php if($_SESSION['wspolrzedna'] == 24): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[24]?>" data-name="<?php echo $gracz[24]?>">

	<area shape="rect" coords="22,718,249,888" href=<?php if($_SESSION['wspolrzedna'] == 25): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[25]?>" data-name="<?php echo $gracz[25]?>">
	<area shape="rect" coords="250,718,478,888" href=<?php if($_SESSION['wspolrzedna'] == 26): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[26]?>" data-name="<?php echo $gracz[26]?>">
	<area shape="rect" coords="480,718,708,888" href=<?php if($_SESSION['wspolrzedna'] == 27): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[27]?>" data-name="<?php echo $gracz[27]?>">
	<area shape="rect" coords="710,718,938,888" href=<?php if($_SESSION['wspolrzedna'] == 28): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[28]?>" data-name="<?php echo $gracz[28]?>">
	<area shape="rect" coords="940,718,1168,888" href=<?php if($_SESSION['wspolrzedna'] == 29): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[29]?>" data-name="<?php echo $gracz[29]?>">
	<area shape="rect" coords="1170,718,1400,888" href=<?php if($_SESSION['wspolrzedna'] == 30): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[30]?>" data-name="<?php echo $gracz[30]?>">

	<area shape="rect" coords="22,893,249,1066" href=<?php if($_SESSION['wspolrzedna'] == 31): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[31]?>" data-name="<?php echo $gracz[31]?>">
	<area shape="rect" coords="250,893,478,1066" href=<?php if($_SESSION['wspolrzedna'] == 32): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[32]?>" data-name="<?php echo $gracz[32]?>">
	<area shape="rect" coords="480,893,708,1066" href=<?php if($_SESSION['wspolrzedna'] == 33): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[33]?>" data-name="<?php echo $gracz[33]?>">
	<area shape="rect" coords="710,893,938,1066" href=<?php if($_SESSION['wspolrzedna'] == 34): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[34]?>" data-name="<?php echo $gracz[34]?>">
	<area shape="rect" coords="940,893,1168,1066" href=<?php if($_SESSION['wspolrzedna'] == 35): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[35]?>" data-name="<?php echo $gracz[35]?>">
	<area shape="rect" coords="1170,893,1400,1066" href=<?php if($_SESSION['wspolrzedna'] == 36): ?>"podglad.php"<?php endif ?> alt="<?php echo $gracz[36]?>" data-name="<?php echo $gracz[36]?>">

</map>

<script type="text/javascript">
    $(function () {
        $('.map').maphilight();
    });
</script>

<script type="text/javascript">
	$(function() {

    $('area').each(function(){
        var txt=$(this).data('name');
        var coor=$(this).attr('coords');
        var coorA=coor.split(',');
        var left=coorA[0];
        var top=coorA[1];

        var $span=$('<span class="map_title">'+txt+'</span>');        
        $span.css({top: top+'px', left: left+'px', position:'absolute'});
        $span.appendTo('#map');
    })

})
</script>


<?php
	include ('stopka.php');
?>