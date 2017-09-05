<?php
	include ('menu2.php');
	include('ranking.php');
?>
<?php
	echo "<p>Witaj ".$_SESSION['user'].'!</p>';
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	echo "<p> </p>";
?>

<div>
	<?php
	if ($_SESSION['rasa'] == 'Orkowie') : ?>
		<img style="height: 50%; width: 50%; object-fit: contain" src="Grafika/orkowie/miasto/orc.jpeg">
	<?php else : ?>
		<img style="height: 50%; width: 50%; object-fit: contain" src="Grafika/ludzie/miasto/human.jpeg">
	<?php endif; ?>
</div>

<?php
$conn = new mysqli("localhost", "root", "", "warcraft");
$result = $conn->query("SELECT budowy, badania, jednostek FROM kolejki WHERE nick = '" . $_SESSION['user'] . "'");

$row = $result->fetch_assoc();
	
?>

<div>
	<div class="kolejki">
	Kolejka budowania: <?php echo $row['budowy'];?>
	</div>
	<div class="kolejki">
	Kolejka badań: <?php echo $row['badania'];?>
	</div>
	<div class="kolejki">
	Kolejka jednostek: <?php echo $row['jednostek'];?>
	</div>
</div>
<div>
	<div class="kolejki"> punkty: </div>
	<div class="kolejki"> ranking: </div>
</div>

<?php
	include ('stopka.php');
?>
