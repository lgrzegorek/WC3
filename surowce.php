<?php
	include ('menu2.php');
	
	
	require_once "connect.php";
			$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
			$login = $_SESSION['user'];
			$rezultat = $polaczenie->query("select * from uzytkownicy where user='$login'");
			if ($rezultat) {
				 while ( $rows = $rezultat->fetch_assoc() ) {
                        $_SESSION['rasa']=$rows['rasa'];
                    }	
			}
			
			if ($_SESSION['rasa'] = "Orkowie"){
			$rezultat2 = $polaczenie->query("select * from orkowie where nick='$login'");
                if($rezultat2) 
                    while ( $rows = $rezultat2->fetch_assoc() ) {
                        $_SESSION['robotnicy']=$rows['robotnicy'];    
                        $_SESSION['robotnicyZloto']=$rows['robotnicyZloto'];    
                        $_SESSION['robotnicyDrewno']=$rows['robotnicyDrewno'];    
                        $_SESSION['robotnicyBudowa']=$rows['robotnicyBudowa'];    
                    }	
			}
			
			if ($_SESSION['rasa'] = "Ludzie"){
			$rezultat3 = $polaczenie->query("select * from ludzie where nick='$login'");
                if($rezultat3) 
                    while ( $rows = $rezultat3->fetch_assoc() ) {
                        $_SESSION['robotnicy']=$rows['robotnicy'];    
                        $_SESSION['robotnicyZloto']=$rows['robotnicyZloto'];    
                        $_SESSION['robotnicyDrewno']=$rows['robotnicyDrewno'];    
                        $_SESSION['robotnicyBudowa']=$rows['robotnicyBudowa'];    
                    }	
			}
			
			/*$rezultat4 = $polaczenie->query("select * from badania where user='$login'");
			if ($rezultat4) {
				 while ( $rows = $rezultat4->fetch_assoc() ) {
                        $_SESSION['Twydobycia']=$rows['Twydobycia'];
                        $_SESSION['Tdrewna']=$rows['Tdrewna'];
                    }	
			}*/
			
			
			
			
			
?>
<h1> Zasoby </h1>
<div class="chopki">
    <img src="Grafika/ludzie/jednostki/worker.png"> Dostępni pracownicy: <?php echo $_SESSION['robotnicy']; ?>
</div>

<div class="gold_mine">
    <h1>Kopalnia złota</h1>
    <img src="Grafika/zasoby/gold_mine.jpg">
    <div class="gold_mine_2">
      <img src="Grafika/ludzie/jednostki/worker.png">  Pracownicy w kopalni złota:<?php echo $_SESSION['robotnicyZloto']; ?> <br>
      <img src="Grafika/icon/mining_level.png" style="width:100px; height:100px;"> Technologia wydobycia złota:<?php echo $_SESSION['t_wydobycia']; ?> <br>
        Aktualne wydobycie [złoto/min]:
    </div> 
    
</div>


<div class="lumber_mill">
    <h1>Tartak</h1>
    <img src="Grafika/zasoby/lumber_mill.jpg">
    <div class="gold_mine_2">
        <img src="Grafika/ludzie/jednostki/worker.png"> Pracownicy w tartaku:<?php echo $_SESSION['robotnicyDrewno']; ?><br>
        <img src="Grafika/icon/lumber_level.png" style="width:100px; height:100px;"> Technologia drewna:<?php echo $_SESSION['t_drewna']; ?> <br>
        Aktualne pozyskiwanie [drewno/min]:
    </div>
    
</div>


<?php
	include ('stopka.php');
?>