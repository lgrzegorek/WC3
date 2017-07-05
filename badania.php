<?php
	include ('menu2.php');
?>

<div class="zakladka_opis">
   
        <div class="nazwa">
            Nazwa
        </div>
        <div class="level">
            Poziom:
        </div>
   
   
    <div class="zakladka_img">
        Obraz:
    </div>
    <div class="opis">
        Opis
    </div>
  <div class="wymagania">Wymagania:</div>
    
  <div class="akcja" style="margin-left: 1%;"> Akcja:</div>
 <div class="czas">Czas:</div>
    

</div>
<div class="zakladka">
        <div class="nazwa">
            Technologia drewna
        </div>
        <div class="level">
            <div id='lvl0'></div>
        </div>
   
    <div class="zakladka_img">
        <img src="Grafika/icon/lumber_level.png">
    </div>
    <div class="opis">
        Technologia drewna pozwala bardziej efektywnie zdobywać drewno.
    </div>
  <div class="wymagania"><div id='wymagania0'></div></div>
    <div class="ulepsz">
       <div id='ulepsz0'></div>
    </div>
    <div class="czas"><div id='czas0'></div></div>
</div>

<div class="zakladka">
    
        <div class="nazwa">
            Technologia wydobycia
        </div>
        <div class="level">
           <div id='lvl1'></div>
        </div>
  
   
    <div class="zakladka_img">
        <img src="Grafika/icon/mining_level.png">
    </div>
    <div class="opis">
        Technologia wydobycia pozwala bardziej efektywnie wydobywać złoto.
    </div>
  <div class="wymagania"><div id='wymagania1'></div></div>
    <div class="ulepsz">
          <div id='ulepsz1'></div>
    </div>
    <div class="czas"><div id='czas1'></div></div>
</div>

<div class="zakladka">
    
        <div class="nazwa">
            Technologia uzbrojenia
        </div>
        <div class="level">
            <div id='lvl2'></div>
        </div>
    
   
    <div class="zakladka_img">
        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <img src="Grafika/orkowie/ulepszenia/up2.png">
        <?php else : ?>
            <img src="Grafika/ludzie/ulepszenia/up3.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Technologia uzbrojenia zwiększa atak jednostek walczących wręcz.
    </div>
   <div class="wymagania"><div id='wymagania2'></div></div>
    <div class="ulepsz">
        <div id='ulepsz2'></div>
    </div>
    <div class="czas"><div id='czas2'></div></div>
</div>

<div class="zakladka">
   
        <div class="nazwa">
            Technologia broni palnej
        </div>
        <div class="level">
           <div id='lvl3'></div>
        </div>
   
   
    <div class="zakladka_img">
        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <img src="Grafika/orkowie/ulepszenia/up4.png">
        <?php else : ?>
            <img src="Grafika/ludzie/ulepszenia/up5.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Technologia broni palnej zwiększa atak jednostek walczących na dystans.
    </div>
   <div class="wymagania"><div id='wymagania3'></div></div>
    <div class="ulepsz">
          <div id='ulepsz3'></div>
    </div>
    <div class="czas"><div id='czas3'></div></div>
</div>

<div class="zakladka">
  
        <div class="nazwa">
            Technologia opancerzenia
        </div>
        <div class="level">
            <div id='lvl4'></div>
        </div>
    
   
    <div class="zakladka_img">
        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <img src="Grafika/orkowie/ulepszenia/up3.png">
        <?php else : ?>
            <img src="Grafika/ludzie/ulepszenia/up4.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Technologia opancerzenia zwięsza pancerz lekko uzbrojonych jednostek.
    </div>
   <div class="wymagania"><div id='wymagania4'></div></div>
    <div class="ulepsz">
         <div id='ulepsz4'></div>
    </div>
    <div class="czas"><div id='czas4'></div></div>
</div>


<div class="zakladka">
    
        <div class="nazwa">
            Technologia opancerzenia 2.
        </div>
        <div class="level">
           <div id='lvl5'></div>
        </div>
    
   
    <div class="zakladka_img">
        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <img src="Grafika/orkowie/ulepszenia/up5.png">
        <?php else : ?>
            <img src="Grafika/ludzie/ulepszenia/up6.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Technologia opancerzenia zwięsza pancerz cięzko uzbrojonych jednostek.
    </div>
   <div class="wymagania"><div id='wymagania5'></div></div>
    <div class="ulepsz">
         <div id='ulepsz5'></div>
    </div>
    <div class="czas"><div id='czas5'></div></div>
</div>

<div class="zakladka">
     
        <div class="nazwa">
            Technologia budownictwa
        </div>
        <div class="level">
            <div id='lvl6'></div>
        </div>
    
   
    <div class="zakladka_img">
        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <img src="Grafika/orkowie/ulepszenia/up6.png">
        <?php else : ?>
            <img src="Grafika/ludzie/ulepszenia/up2.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Technologia budownictwa pozwala na szybsze budowanie budynków.
    </div>
   <div class="wymagania"><div id='wymagania6'></div></div>
    <div class="ulepsz">
         <div id='ulepsz6'></div>
    </div>
    <div class="czas"><div id='czas6'></div></div>
</div>
<?php
	include ('stopka.php');
?>
<script>
    var levele=[<?php echo json_encode($_SESSION['t_drewna']); ?>,<?php echo json_encode($_SESSION['t_wydobycia']); ?>,<?php echo json_encode($_SESSION['t_uzbrojenia']); ?>,<?php echo json_encode($_SESSION['t_bronipalnej']); ?>,<?php echo json_encode($_SESSION['t_opancerzenia']); ?>,<?php echo json_encode($_SESSION['t_opancerzenia1']); ?>,<?php echo json_encode($_SESSION['t_budownictwa']); ?>];
    var surowce=[<?php echo json_encode($_SESSION['zloto']); ?>,<?php echo json_encode($_SESSION['drewno']); ?>];
    for (var i=0; i<7; i++){
        document.getElementById('lvl'+i).innerHTML=levele[i];
        power=Math.pow(1.5,levele[i]);
        czas=Math.round(power*30);
        zasoby=Math.round(400*power);
        document.getElementById('wymagania'+i).innerHTML="<img src='Grafika/icon/gold.png' style='width:20px; height:20px;' >"+zasoby+"<br> <img src='Grafika/icon/wood.png' style='width:20px; height:20px;'>"+zasoby;
        if (surowce[0]>=zasoby && surowce[1]>=zasoby){
           document.getElementById('ulepsz'+i).innerHTML="<button type='button' class='btn btn-success' onclick='badaj("+i+")'>Badaj</button>";
        }
        else{
             document.getElementById('ulepsz'+i).innerHTML='<button type="button" class="btn btn-danger">Brak zasobów</button>';
        }
        if (Math.floor(czas/60)==0){
            document.getElementById('czas'+i).innerHTML=czas%60+"min.";
        }
        else if(czas%60==0){
             document.getElementById('czas'+i).innerHTML=floor(czas/60)+"godz.";
        }
        else{
             document.getElementById('czas'+i).innerHTML=Math.floor(czas/60)+"godz.<br>"+czas%60+"min.";
        }
    }
    function badaj(num){
        $.post('badaj.php',{post_lvl:levele[num],badanie:num},function(){});
        location.reload();
    }


</script>