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
    <div class="chopki">
        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <img src="Grafika/orkowie/jednostki/worker.png">
        <?php else : ?>
            <img src="Grafika/ludzie/jednostki/worker.png">
        <?php endif; ?>
    </div>
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
    <input type="text" style="width: 30px;">
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
    <input type="text" style="width: 30px;">
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
     <input type="text" style="width: 30px;">
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
     <input type="text" style="width: 30px;">
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
     <input type="text" style="width: 30px;">
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
    <input type="text" style="width: 30px;">
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
     <input type="text" style="width: 30px;">
    <div class="ulepsz">
         <div id="ulepsz_6"></div>
    </div>
     <div class="czas"><div id="czas_6"></div></div>
</div>
<?php
	include ('stopka.php');
?>

<script>
var lvle=[<?php echo json_encode($_SESSION['castle_lvl']); ?>,<?php echo json_encode($_SESSION['barrack_lvl']); ?>,<?php echo json_encode($_SESSION['altar_lvl']); ?>,<?php echo json_encode($_SESSION['forge_lvl']); ?>,<?php echo json_encode($_SESSION['house_lvl']); ?>,<?php echo json_encode($_SESSION['zloto_lvl']); ?>,<?php echo json_encode($_SESSION['drewno_lvl']); ?>];
var zasoby=[<?php echo json_encode($_SESSION['zloto']); ?>,<?php echo json_encode($_SESSION['drewno']); ?>];
var zloto_arr1=[500,300,300,300,250,200,200];    
var drewno_arr1=[500,350,150,300,300,400,400];
var czas_arr1=[30,25,20,25,20,15,15,15];    
var zloto_arr=[0,0,0,0,0,0,0];
var drewno_arr=[0,0,0,0,0,0,0];
var czas_arr=[0,0,0,0,0,0,0];
    
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
             document.getElementById('czas_'+i).innerHTML=czas_arr[i]+"godz.<br>"+czas_arr[i]%60+"min.";
        }
        if(zasoby[0]>zloto_arr[i]&&zasoby[1]>drewno_arr[i]){
            document.getElementById('ulepsz_'+i).innerHTML="<button type='button' class='btn btn-success' onclick='buduj("+i+")'>Ulepsz</button>";
        }
        else{
             document.getElementById('ulepsz_'+i).innerHTML='<button type="button" class="btn btn-danger">Brak zasobów</button>';
        }
    }
   
    function buduj(bud){
        $.post('buduj.php',{post_zloto:zloto_arr[bud],post_drewno:drewno_arr[bud],post_lvl:lvle[bud],budynek:bud},function(data){ alert( "Data Loaded: " + data );});
        location.reload();
    }


</script>