<?php
	include ('menu2.php');
    kolejka("budynek");
?>
 <div id="kolejka" ></div>
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
    
  <div class="akcja"> Akcja:</div>
  <div class="czas" style="text-align:left;">Czas:</div>
    

</div>

<div class="zakladka">
    
        <div class="nazwa">
            Ratusz
        </div>
        <div class="level">
            <b><div id="lvl_0"></div></b>
        </div>
   
    <div class="zakladka_img">
        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <img src="Grafika/orkowie/budowle/hall.png">
        <?php else : ?>
            <img src="Grafika/ludzie/budowle/castle.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Ratusz pozwala na rekrutację robotników.
    </div>
  <div class="wymagania"><div id="wymagania_0"></div></div>
    
    <div class="ulepsz" id="upRatusz">
      <div id="ulepsz_0"></div>
    </div>
    <div class="czas"><div id="czas_0"></div></div>
</div>
<div class="zakladka">
     
        <div class="nazwa">
            Koszary
        </div>
        <div class="level">
              <b><div id="lvl_1"></div></b>
        </div>
    
   
    <div class="zakladka_img">
        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <img src="Grafika/orkowie/budowle/barracks.png">
        <?php else : ?>
            <img src="Grafika/ludzie/budowle/barracks.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Koszary umożliwiają rekrutację jednostek, wraz ze wzrostem poziomu rekrutacja przebiega szybciej, a także daje możliwość rekrutacji kolejnych jednostek.
    </div>
    <div class="wymagania"><div id="wymagania_1"></div></div>
   
    <div class="ulepsz">
         <div id="ulepsz_1"></div>
    </div>
      <div class="czas"><div id="czas_1"></div></div>
</div>
<div class="zakladka">
   
        <div class="nazwa">
            Ołtarz 
        </div>
        <div class="level">
            <b><div id="lvl_2"></div></b>
        </div>
    
   
    <div class="zakladka_img">
        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <img src="Grafika/orkowie/budowle/altar.png">
        <?php else : ?>
            <img src="Grafika/ludzie/budowle/altar.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Ratusz pozwala na przywołanie, a także wskrzeszenie bohaterów. Co 10 poziomów możliwe jest przywołanie kolejnego bohatera.
    </div>
    <div class="wymagania"><div id="wymagania_2"></div></div>
   
    <div class="ulepsz">
        <div id="ulepsz_2"></div>
    </div>
     <div class="czas"><div id="czas_2"></div></div>
</div>
<div class="zakladka">
    
        <div class="nazwa">
            Kuźnia
        </div>
        <div class="level">
         <b><div id="lvl_3"></div></b>
        </div>
  
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/budowle/forge.png">
    </div>
    <div class="opis">
        Kuźnia pozwala na dokonywanie badań w zakresie ulepszeń jednostek, wyższe poziomy kuźni odblokowują wyższe poziomy ulepszeń.
    </div>
     <div class="wymagania"><div id="wymagania_3"></div></div>
    
    <div class="ulepsz">
         <div id="ulepsz_3"></div>
    </div>
    <div class="czas"><div id="czas_3"></div></div>
</div>
<div class="zakladka">
    
        <div class="nazwa">
            Farma
        </div>
        <div class="level">
            <b><div id="lvl_4"></div></b>
        
    </div>
   
    <div class="zakladka_img">
        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <img src="Grafika/orkowie/budowle/house.png">
        <?php else : ?>
            <img src="Grafika/ludzie/budowle/house.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Farmy wytwarzają żywność, która jest potrzebna do utrzymania jednostek. Każda farma dostarcza 10 jednostek pożywienia.
    </div>
    <div class="wymagania"><div id="wymagania_4"></div></div>
    <div class="ulepsz">
         <div id="ulepsz_4"></div>
    </div>
     <div class="czas"><div id="czas_4"></div></div>
</div>
<div class="zakladka">
    <div class="nazwa">
        Magazyn złota
    </div>
    <div class="level">
         <b><div id="lvl_5"></div></b>
    </div>
    <div class="zakladka_img">
        <img src="Grafika/ludzie/budowle/magazyn_zlota.jpg">
    </div>
    <div class="opis">
        W magazynie złota przechowywane jest złoto. Im wyższy poziom magazynu tym więcej złota można posiadać.
    </div>
    <div class="wymagania">
        <div id="wymagania_5"></div>
    </div>
    <div class="ulepsz">
         <div id="ulepsz_5"></div>
    </div>
    <div class="czas">
        <div id="czas_5"></div>
    </div>
</div>

<div class="zakladka">
    
        <div class="nazwa">
            Magazyn drewna
        </div>
        <div class="level">
             <b><div id="lvl_6"></div></b>
        
    </div>
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/budowle/magazyn_drewna.jpg">
    </div>
    <div class="opis">
        W magazynie drewna przechowywane jest drewno. Im wyższy poziom magazynu tym więcej drewna można posiadać.
    </div>
     <div class="wymagania"><div id="wymagania_6"></div></div>
    <div class="ulepsz">
         <div id="ulepsz_6"></div>
    </div>
     <div class="czas"><div id="czas_6"></div></div>
</div>
<?php
	include ('stopka.php');
?>

<script>
    var lvle=[<?php echo json_encode($_SESSION['castle_lvl']); ?>,<?php echo json_encode($_SESSION['barrack_lvl']); ?>,<?php echo json_encode($_SESSION['altar_lvl']); ?>,<?php echo json_encode($_SESSION['forge_lvl']); ?>,<?php echo json_encode($_SESSION['house_lvl']); ?>,<?php echo json_encode($_SESSION['magazynZlota_lvl']); ?>,<?php echo json_encode($_SESSION['magazynDrewna_lvl']); ?>];
    var zasoby=[<?php echo json_encode($_SESSION['zloto']); ?>,<?php echo json_encode($_SESSION['drewno']); ?>];
    var zloto_arr1=[500,300,300,300,250,200,200];    
    var drewno_arr1=[500,350,150,300,300,400,400];
    //var czas_arr1=[30,25,20,25,20,15,15,15];    
    var czas_arr1=[1,1,1,1,1,1,1,1];    
    var zloto_arr=[0,0,0,0,0,0,0];
    var drewno_arr=[0,0,0,0,0,0,0];
    var czas_arr=[0,0,0,0,0,0,0];
    var budynek=<?php echo json_encode($_SESSION['budynek']); ?>;
    // Set the date we're counting down to
    var countDownDate = new Date(<?php echo json_encode($_SESSION['data_budynku']); ?>).getTime();
    // Update the count down every 1 second
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
    if(distance>0){    
        document.getElementById("kolejka").innerHTML = "Kolejka zajęta! Ulepszany budynek "+budynek+ " pozostały czas: "+hours + "h "
        + minutes + "m " + seconds + "s ";
    }
        
    else { 
        document.getElementById("kolejka").innerHTML="Kolejka wolna";
    }
    
    if (distance < 0 && budynek!=0) {
        clearInterval(x);
    document.getElementById("kolejka").innerHTML = "Zbudowano!";
        ulepszono('budynki_'+budynek);
    }
}, 1000);
    
   
    for (i=0; i<7; i++){
        document.getElementById('lvl_'+i).innerHTML=lvle[i];
        if (lvle[i]!=0){
        power=Math.pow(1.5,lvle[i]);
        zloto_arr[i]=Math.round(zloto_arr1[i]*power);
        drewno_arr[i]=Math.round(drewno_arr1[i]*power);
        czas_arr[i]=Math.round(czas_arr1[i]*power);
            
        }
        else {
            zloto_arr[i]=zloto_arr1[i];
            drewno_arr[i]=drewno_arr1[i];
            czas_arr[i]=czas_arr1[i];
        }
        document.getElementById('wymagania_'+i).innerHTML="<img src='Grafika/icon/gold.png' style='width:20px; height:20px;' > "+zloto_arr[i]+"<br> <img src='Grafika/icon/wood.png' style='width:20px; height:20px;'> "+drewno_arr[i];  
        if (Math.floor(czas_arr[i]/60)==0){
            document.getElementById('czas_'+i).innerHTML=czas_arr[i]%60+"min.";
        }
        else if(czas_arr[i]%60==0){
             document.getElementById('czas_'+i).innerHTML=floor(czas_arr[i]/60)+"godz.";
        }
        else{
             document.getElementById('czas_'+i).innerHTML=Math.floor(czas_arr[i]/60)+"godz.<br>"+czas_arr[i]%60+"min.";
        }
        if(budynek==0){
            var ulepsz="ulepsz";
            if(zasoby[0]>zloto_arr[i]&&zasoby[1]>drewno_arr[i]){
                document.getElementById('ulepsz_'+i).innerHTML="<button type='button' class='btn btn-success' onclick='buduj(ulepsz,"+i+")'>Ulepsz</button>";
            }
            else{
                 document.getElementById('ulepsz_'+i).innerHTML='<button type="button" class="btn btn-danger">Brak zasobów</button>';
            }
        }
        else{
             var ulepszany=0;
             document.getElementById('ulepsz_'+i).innerHTML='';
            switch(budynek){
                case 'castle': ulepszany=0; break; 
                case 'barrack': ulepszany=1; break; 
                case 'altar': ulepszany=2; break; 
                case 'forge': ulepszany=3; break; 
                case 'house': ulepszany=4; break; 
                case 'magazynZlota': ulepszany=5; break; 
                case 'magazynDrewna': ulepszany=6; break; 
            }
            var ulepszany_na=parseInt(lvle[ulepszany])+1;
            var anuluj="anuluj";
            document.getElementById('lvl_'+ulepszany).innerHTML=lvle[ulepszany]+' -> '+ulepszany_na;
            document.getElementById('ulepsz_'+ulepszany).innerHTML="<button type='button' class='btn btn-danger' onclick='buduj(anuluj,"+ulepszany+")'>Anuluj</button>";
        }
    }

   
    function buduj(akcja,bud){
        $.post('buduj.php',{post_akcja:akcja,post_zloto:zloto_arr[bud],post_drewno:drewno_arr[bud],post_lvl:lvle[bud],budynek:bud,post_czas: czas_arr[bud]},function(){});
        location.reload();
    }
    
    function ulepszono(co){
         $.post('ulepszono.php',{post_co:co},function(){
             location.reload();
         });
        
    }
    /*
    function anuluj(co){
        $.post('anuluj.php',{post_co:co, post_drewno: drewno_arr[co], post_zloto: zloto_arr[co]},function(){
             location.reload();
         });
    }
 */

</script>