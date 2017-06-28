<?php
	include ('menu2.php');
?>
<?php
	echo "<p>Witaj ".$_SESSION['user'].'!</p>';
	echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
	echo " | <b>Złoto</b>: ".$_SESSION['zloto'];
	echo " | <b>Żywność</b>: ".$_SESSION['zywnosc']."</p>";
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	echo "<p> </p>";
?>

<div>
	<img style="height: 60%; width: 60%; object-fit: contain" src="Grafika/ludzie/miasto/human.jpeg">
</div>

<div>
	<div class="kolejki"> kolejka budowania: </div>
	<div class="kolejki"> kolejka badań: </div>
	<div class="kolejki"> kolejka koszar: </div>
</div>
<div>
	<div class="kolejki"> punkty: </div>
	<div class="kolejki"> ranking: </div>
</div>

<?php
	include ('stopka.php');
?>