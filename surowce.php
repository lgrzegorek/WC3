<?php
	include ('menu2.php');		
?>
<h1> Zasoby </h1>
<div class="chopki">
    <img src="Grafika/ludzie/jednostki/worker.png"> Dostępni pracownicy: <?php echo $_SESSION['robotnicy']; ?>
</div>

<div class="gold_mine">
    <h1>Kopalnia złota</h1>
    <img src="Grafika/zasoby/gold_mine.jpg">
    <div class="gold_mine_2">
      <img src="Grafika/ludzie/jednostki/worker.png">  Pracownicy w kopalni złota:<?php echo $_SESSION['robotnicy_zloto']; ?> <br>
      <img src="Grafika/icon/mining_level.png" style="width:100px; height:100px;"> Technologia wydobycia złota:<?php echo $_SESSION['t_wydobycia']; ?> <br>
        Aktualne wydobycie [złoto/min]:
    </div> 
    
</div>


<div class="lumber_mill">
    <h1>Tartak</h1>
    <img src="Grafika/zasoby/lumber_mill.jpg">
    <div class="gold_mine_2">
        <img src="Grafika/ludzie/jednostki/worker.png"> Pracownicy w tartaku:<?php echo $_SESSION['robotnicy_drewno']; ?><br>
        <img src="Grafika/icon/lumber_level.png" style="width:100px; height:100px;"> Technologia drewna:<?php echo $_SESSION['t_drewna']; ?> <br>
        Aktualne pozyskiwanie [drewno/min]:
    </div>
    
</div>


<?php
	include ('stopka.php');
?>
