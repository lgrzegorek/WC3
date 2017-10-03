<?php
	include ('menu2.php');
	include('ranking.php');
    ruchy_wojsk();
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
	<div id="budowy" class="kolejki">
	Kolejka budowania: <br>
	</div>
	<div id="badania" class="kolejki">
	Kolejka badań: <br>
	</div>
	<div id="kolejka_jednostki" class="kolejki" >
    Kolejka jednostek: <br>
	</div>
</div>
<div>
	<div class="kolejki"> punkty: <?php echo $_SESSION['rankingKoncowy'] ?></div>
	<div class="kolejki"> ranking: <?php echo $_SESSION['ranking_gracza'] ?></div>
</div>

<?php
	include ('stopka.php');
?>
<script>
    for(var i=0; i<10; i++){
        $('#kolejka_jednostki').append("<div id='kolejka_jednostki"+i+"' class='kolejka_j'> x</div>");
    }
    var rasa=<?php echo json_encode($_SESSION['rasa']); ?>;
    var rekrutacja=<?php echo json_encode($_SESSION['kolejka_jednostek']); ?>.split("-");
    var budynek=<?php echo json_encode($_SESSION['budynek']); ?>;
    var badanie=<?php echo json_encode($_SESSION['badanie']); ?>;
    if(rasa.equals("orkowie")){
        switch(budynek){
             
        }
    }
    for (var i=1; i<11; i++){
        var obraz="";
        if(rekrutacja[i-1]){
                switch(rekrutacja[i-1]){
                    case "siepacze": obraz="grunt"; break;
                    case "lowcy_glow": obraz="headhunter"; break;
                    case "taureni": obraz="tauren"; break;
                    case "kodo": obraz="kodo"; break;
                    case "szamani": obraz="shaman"; break;
                    case "jezdzcy": obraz="bat"; break;
                    case "miecznicy": obraz="footman"; break;
                    case "strzelcy": obraz="sniper"; break;
                    case "rycerze": obraz="knight"; break;
                    case "kanonierzy": obraz="canon"; break;
                    case "czarodziejki": obraz="wizard"; break;
                    case "zyrokoptery": obraz="gyro"; break;
                }          
            }
            document.getElementById("kolejka_jednostki"+(i-1)).style.backgroundImage="url('Grafika/"+rasa+"/jednostki/"+obraz+".png')";
    }
</script>
