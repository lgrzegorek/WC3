<?php
	include ('menu2.php');		
?>
<h1> Zasoby </h1>

        
<div class="chopki">

    
        <?php echo "<img src=Grafika/".$_SESSION['rasa']."/jednostki/worker.png>  Dostępni pracownicy: <div id='robotnicy' style='display:inline-block'></div>" ?>
     
   

</div>

<div class="gold_mine">
    <h1>Kopalnia złota</h1>
    <img src="Grafika/zasoby/gold_mine.jpg">
    <div class="gold_mine_2">
        <div class="chopeczki" style="display:inline-block">
         <?php echo "<img src=Grafika/".$_SESSION['rasa']."/jednostki/worker.png>  Pracownicy w kopalni złota:<div id='robotnicy_zloto' style='display:inline-block'></div>"?> 
            <br>
            <img src="Grafika/icon/up.jpg" onclick="zamien('zloto','dodaj')">
            <img src="Grafika/icon/down.jpg" onclick="zamien('zloto','odejmij')">
        </div>
        <br>

      <img src="Grafika/icon/mining_level.png" style="width:100px; height:100px;"> Technologia wydobycia złota: <?php echo $_SESSION['t_wydobycia']; ?> <br>
        Aktualne wydobycie [złoto/min]:
    </div> 
    
</div>


<div class="lumber_mill">
    <h1>Tartak</h1>
    <img src="Grafika/zasoby/lumber_mill.jpg">
    <div class="gold_mine_2">
        <div class="chopeczki" style="display:inline-block">
            <br>
          <?php echo "<img src=Grafika/".$_SESSION['rasa']."/jednostki/worker.png>  Pracownicy w tartaku: <div id='robotnicy_drewno' style='display:inline-block; margin-right: 55px;'></div>"?>
            <br>
            <img src="Grafika/icon/up.jpg" onclick="zamien('drewno','dodaj')">
            <img src="Grafika/icon/down.jpg" onclick="zamien('drewno','odejmij')">
        </div>
        <img src="Grafika/icon/lumber_level.png" style="width:100px; height:100px;"> Technologia pozyskiwania drewna: <?php echo $_SESSION['t_drewna']; ?> <br>
        Aktualne pozyskiwanie [drewno/min]:
    </div>
    
</div>


<div class="potwierdz">
    <input type="submit" value="zapisz" style="color:black"; onclick="wykonaj()">
</div>

<?php
	include ('stopka.php');
?>

    <script>
            var wszyscy = <?php echo json_encode($_SESSION['robotnicy']); ?>;
            var zloto = <?php echo json_encode($_SESSION['robotnicy_zloto']); ?>;
            var drewno = <?php echo json_encode($_SESSION['robotnicy_drewno']); ?>;
            document.getElementById('robotnicy').innerHTML=wszyscy; 
            document.getElementById('robotnicy_zloto').innerHTML=zloto;
            document.getElementById('robotnicy_drewno').innerHTML=drewno;
        
        function zamien(surowiec, akcja){
            if (akcja=='dodaj'){
                if(surowiec=="zloto"){ 
                     if(wszyscy>0){
                            wszyscy--;
                            zloto++;
                            document.getElementById("robotnicy_zloto").innerHTML=zloto;
                            document.getElementById("robotnicy").innerHTML=wszyscy;
                            $.post('surowce.php', {variable: zloto});
                     }
                     else if (drewno>0){
                             drewno--;
                             zloto++;
                            document.getElementById("robotnicy_zloto").innerHTML=zloto;
                            document.getElementById("robotnicy_drewno").innerHTML=drewno;
                     }
                }
                else if(surowiec=="drewno"){ 
                     if(wszyscy>0){
                            wszyscy--;
                            drewno++;
                            document.getElementById("robotnicy_drewno").innerHTML=drewno;
                            document.getElementById("robotnicy").innerHTML=wszyscy;
                     }
                     else if (zloto>0){
                             zloto--;
                             drewno++;
                            document.getElementById("robotnicy_zloto").innerHTML=zloto;
                            document.getElementById("robotnicy_drewno").innerHTML=drewno;
                     }
                }

                         
            }
        
            else if (akcja=="odejmij"){
                if (surowiec=='zloto' && zloto>0){
                    zloto--;
                    wszyscy++;
                    document.getElementById("robotnicy_zloto").innerHTML=zloto;
                    document.getElementById("robotnicy").innerHTML=wszyscy;
                }
                else if (surowiec=='drewno' && drewno>0){
                    wszyscy++;
                    drewno--;
                    document.getElementById("robotnicy_drewno").innerHTML=drewno;
                    document.getElementById("robotnicy").innerHTML=wszyscy;
                }
            }
       
        }
    function wykonaj(){
          $.post('wykonaj.php',{postzloto:zloto,postdrewno:drewno,postwszyscy:wszyscy},function(){});
        location.reload();
  
    }
    
    </script>