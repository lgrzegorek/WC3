<?php
	include ('menu2.php');
    kolejka_budowy();
?>
<div id="kolejka"></div>

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
            <div id='lvl_0'></div>
        </div>
   
    <div class="zakladka_img">
        <img src="Grafika/icon/lumber_level.png">
    </div>
    <div class="opis">
        Technologia drewna pozwala bardziej efektywnie zdobywać drewno.
    </div>
  <div class="wymagania"><div id='wymagania_0'></div></div>
    <div class="ulepsz">
       <div id='ulepsz_0'></div>
    </div>
    <div class="czas"><div id='czas_0'></div></div>
</div>

<div class="zakladka">
    
        <div class="nazwa">
            Technologia wydobycia
        </div>
        <div class="level">
           <div id='lvl_1'></div>
        </div>
  
   
    <div class="zakladka_img">
        <img src="Grafika/icon/mining_level.png">
    </div>
    <div class="opis">
        Technologia wydobycia pozwala bardziej efektywnie wydobywać złoto.
    </div>
  <div class="wymagania"><div id='wymagania_1'></div></div>
    <div class="ulepsz">
          <div id='ulepsz_1'></div>
    </div>
    <div class="czas"><div id='czas_1'></div></div>
</div>

<div class="zakladka">
    
        <div class="nazwa">
            Technologia uzbrojenia
        </div>
        <div class="level">
            <div id='lvl_2'></div>
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
   <div class="wymagania"><div id='wymagania_2'></div></div>
    <div class="ulepsz">
        <div id='ulepsz_2'></div>
    </div>
    <div class="czas"><div id='czas_2'></div></div>
</div>

<div class="zakladka">
   
        <div class="nazwa">
            Technologia broni palnej
        </div>
        <div class="level">
           <div id='lvl_3'></div>
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
   <div class="wymagania"><div id='wymagania_3'></div></div>
    <div class="ulepsz">
          <div id='ulepsz_3'></div>
    </div>
    <div class="czas"><div id='czas_3'></div></div>
</div>

<div class="zakladka">
  
        <div class="nazwa">
            Technologia opancerzenia
        </div>
        <div class="level">
            <div id='lvl_4'></div>
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
   <div class="wymagania"><div id='wymagania_4'></div></div>
    <div class="ulepsz">
         <div id='ulepsz_4'></div>
    </div>
    <div class="czas"><div id='czas_4'></div></div>
</div>


<div class="zakladka">
    
        <div class="nazwa">
            Technologia opancerzenia 2.
        </div>
        <div class="level">
           <div id='lvl_5'></div>
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
   <div class="wymagania"><div id='wymagania_5'></div></div>
    <div class="ulepsz">
         <div id='ulepsz_5'></div>
    </div>
    <div class="czas"><div id='czas_5'></div></div>
</div>

<div class="zakladka">
     
        <div class="nazwa">
            Technologia budownictwa
        </div>
        <div class="level">
            <div id='lvl_6'></div>
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
   <div class="wymagania"><div id='wymagania_6'></div></div>
    <div class="ulepsz">
         <div id='ulepsz_6'></div>
    </div>
    <div class="czas"><div id='czas_6'></div></div>
</div>
<?php
	include ('stopka.php');
?>
<script>
    var levele=[<?php echo json_encode($_SESSION['t_drewna']); ?>,<?php echo json_encode($_SESSION['t_wydobycia']); ?>,<?php echo json_encode($_SESSION['t_uzbrojenia']); ?>,<?php echo json_encode($_SESSION['t_broniPalnej']); ?>,<?php echo json_encode($_SESSION['t_opancerzenia']); ?>,<?php echo json_encode($_SESSION['t_opancerzenia1']); ?>,<?php echo json_encode($_SESSION['t_budownictwa']); ?>];
    var ulepsz="ulepsz";
    var anuluj="anuluj";
    var surowce=[<?php echo json_encode($_SESSION['zloto']); ?>,<?php echo json_encode($_SESSION['drewno']); ?>];
    var czas=[0,0,0,0,0,0,0];
    var badanie=<?php echo json_encode($_SESSION['badanie']); ?>;    
    var countDownDate = new Date(<?php echo json_encode($_SESSION['data_badania']); ?>).getTime();
    var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for hours, minutes and seconds
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    if(distance>0 && badanie!=0){    
        document.getElementById("kolejka").innerHTML = "Kolejka zajęta! Badanie: "+badanie+ " pozostały czas: "+hours + "h "
        + minutes + "m " + seconds + "s ";
    }
        
    else { 
        document.getElementById("kolejka").innerHTML="Kolejka wolna";
    }
    
    if (distance < 0 && badanie!=0) {
        clearInterval(x);
        document.getElementById("kolejka").innerHTML = "Zbadano!";
        setInterval(ulepszono('badanie_'+badanie),2000);
    }
}, 1000);
    
    for (var i=0; i<7; i++){
        document.getElementById('lvl_'+i).innerHTML=levele[i];
        power=Math.pow(1.5,levele[i]);
        czas[i]=Math.round(power*2);
        zasoby=Math.round(400*power);
        document.getElementById('wymagania_'+i).innerHTML="<img src='Grafika/icon/gold.png' style='width:20px; height:20px;' >"+zasoby+"<br> <img src='Grafika/icon/wood.png' style='width:20px; height:20px;'>"+zasoby;
        if(badanie==0){
            if (surowce[0]>=zasoby && surowce[1]>=zasoby){
               document.getElementById('ulepsz_'+i).innerHTML="<button type='button' class='btn btn-success' onclick='badaj(ulepsz,"+i+")'>Badaj</button>";
            }
            else{
                 document.getElementById('ulepsz_'+i).innerHTML='<button type="button" class="btn btn-danger">Brak zasobów</button>';
            }
        }
        else{
             var ulepszany=0;
             document.getElementById('ulepsz_'+i).innerHTML='';
            switch(badanie){
                case "t_drewna": ulepszany=0; break;
                case "t_wydobycia": ulepszany=1; break;
                case "t_uzbrojenia": ulepszany=2; break;
                case "t_broniPalnej": ulepszany=3; break;
                case "t_opancerzenia": ulepszany=4; break;
                case "t_opancerzenia1": ulepszany=5; break;
                case "t_budownictwa": ulepszany=6; break;
            }
            var ulepszany_na=parseInt(levele[ulepszany])+1;
            document.getElementById('lvl_'+ulepszany).innerHTML=levele[ulepszany]+' -> '+ulepszany_na;
            document.getElementById('ulepsz_'+ulepszany).innerHTML="<button type='button' class='btn btn-danger' onclick='badaj(anuluj,"+ulepszany+")'>Anuluj</button>";
        }
        if (Math.floor(czas[i]/60)==0){
            document.getElementById('czas_'+i).innerHTML=czas[i]%60+"min.";
        }
        else if(czas[i]%60==0){
             document.getElementById('czas_'+i).innerHTML=floor(czas[i]/60)+"godz.";
        }
        else{
             document.getElementById('czas_'+i).innerHTML=Math.floor(czas[i]/60)+"godz.<br>"+czas[i]%60+"min.";
        }
    }
    function badaj(akcja,num){
        $.post('badaj.php',{post_lvl:levele[num],badanie:num,czas:czas[num],post_akcja:akcja},function(){
        });
        location.reload();
    }
    function ulepszono(co){
         $.post('ulepszono.php',{post_co:co},function(){
             location.reload();
         });
        
    }


</script>