<?php
    
	include ('menu2.php');
    oblicz_zywnosc();
    kolejka("jednostki");
   
?>
<div id="kolejka1" class="kolejka_j" >-</div>
<div id="kolejka2" class="kolejka_j" >-</div>
<div id="kolejka3" class="kolejka_j">-</div>
<div id="kolejka4" class="kolejka_j" >-</div>
<div id="kolejka5" class="kolejka_j" >-</div>
<div id="kolejka6" class="kolejka_j" >-</div>
<div id="kolejka7" class="kolejka_j" >-</div>
<div id="kolejka8" class="kolejka_j" >-</div>
<div id="kolejka9" class="kolejka_j" >-</div>
<div id="kolejka10" class="kolejka_j" >-</div>
<div id="kolejka"></div>
<div id="czas"></div>
<div class="jednostka">
   <div class="jednostkaimg">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Siepacz </b> <br>
        <img src="Grafika/orkowie/jednostki/grunt.png">
    <?php else : ?>
        <b> Piechur </b> <br>
        <img src="Grafika/ludzie/jednostki/footman.png">
    <?php endif; ?>
       </div>
    <div class="parametry">
        <div class="parametry2">
            <b>Parametry:</b> <br>
            <img src='Grafika/icon/attack.png' style='width:20px; height:20px;' > 4<br>
            <img src='Grafika/icon/defense.png' style='width:20px; height:20px;' > 5<br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/hp.png' style='width:20px; height:20px;' > 25<br>
            <img src='Grafika/icon/armor.png' style='width:20px; height:20px;' > ciężki <br>
        </div>  
       
        <div class="parametry2">
            <b>Wymagania:</b><br>
            <img src='Grafika/icon/gold.png' style='width:20px; height:20px;' > 150 <br>
            <img src='Grafika/icon/wood.png' style='width:20px; height:20px;' > 40 <br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/meat.png' style='width:20px; height:20px;' > 1<br>
            <img src='Grafika/icon/clock.png' style='width:20px; height:20px;' >  12    min.<br>
        </div>
    </div>
    <div class="jednostka_rekrutacja">
            <div class="zmiana"> 
                x10 <br>
               <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz (10,0,'odejmij')" >    
            </div>
            <div class="zmiana">
                <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(1,0,'odejmij')" >
            </div>      
            <div class="zmiana"> 
               <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(1,0,'dodaj')" >    
            </div>
            <div class="zmiana">
                x10 <br>
                <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(10,0,'dodaj')" >
            </div>
            <div class="ilosc" id="jednostka_0">0</div>
            <button type="button" style="width:100px;" class="btn btn-success" onclick="rekrutuj(0,jednostki[0])">Rekrutuj</button>
  
    </div>

</div>
<div class="jednostka">
   <div class="jednostkaimg">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Łowca głów </b> <br>
        <img src="Grafika/orkowie/jednostki/headhunter.png">
    <?php else : ?>
        <b> Strzelec </b> <br>
        <img src="Grafika/ludzie/jednostki/sniper.png">
    <?php endif; ?>
       </div>
    <div class="parametry">
        <div class="parametry2">
            <b>Parametry:</b> <br>
            <img src='Grafika/icon/attack.png' style='width:20px; height:20px;' > 4<br>
            <img src='Grafika/icon/defense.png' style='width:20px; height:20px;' > 2<br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/hp.png' style='width:20px; height:20px;' > 15<br>
            <img src='Grafika/icon/armor.png' style='width:20px; height:20px;' > lekki <br>
        </div>  
       
        <div class="parametry2">
            <b>Wymagania:</b><br>
            <img src='Grafika/icon/gold.png' style='width:20px; height:20px;' > 120 <br>
            <img src='Grafika/icon/wood.png' style='width:20px; height:20px;' > 30 <br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/meat.png' style='width:20px; height:20px;' > 1<br>
            <img src='Grafika/icon/clock.png' style='width:20px; height:20px;' >  10    min.<br>
        </div>
    </div>
    <div class="jednostka_rekrutacja">
            <div class="zmiana"> 
                x10 <br>
               <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(10,1,'odejmij')" >    
            </div>
            <div class="zmiana">
                <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(1,1,'odejmij')" >
            </div>      
            <div class="zmiana"> 
               <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(1,1,'dodaj')" >    
            </div>
            <div class="zmiana">
                x10 <br>
                <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(10,1,'dodaj')" >
            </div>
            <div class="ilosc" id="jednostka_1">0</div>
            <button type="button" style="width:100px;" class="btn btn-success" onclick="rekrutuj(1,jednostki[1])">Rekrutuj</button>
  
    </div>

</div>
<div class="jednostka">
   <div class="jednostkaimg">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Tauren </b> <br>
        <img src="Grafika/orkowie/jednostki/tauren.png" >
    <?php else : ?>
        <b> Rycerz </b> <br>
        <img src="Grafika/ludzie/jednostki/knight.png">
    <?php endif; ?>
       </div>
    <div class="parametry">
        <div class="parametry2">
            <b>Parametry:</b> <br>
            <img src='Grafika/icon/attack.png' style='width:20px; height:20px;' > 6<br>
            <img src='Grafika/icon/defense.png' style='width:20px; height:20px;' > 7<br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/hp.png' style='width:20px; height:20px;' > 30<br>
            <img src='Grafika/icon/armor.png' style='width:20px; height:20px;' > ciężki <br>
        </div>  
       
        <div class="parametry2">
            <b>Wymagania:</b><br>
            <img src='Grafika/icon/gold.png' style='width:20px; height:20px;' > 200 <br>
            <img src='Grafika/icon/wood.png' style='width:20px; height:20px;' > 60 <br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/meat.png' style='width:20px; height:20px;' > 2<br>
            <img src='Grafika/icon/clock.png' style='width:20px; height:20px;' >  15    min.<br>
        </div>
    </div>
    <div class="jednostka_rekrutacja">
            <div class="zmiana"> 
                x10 <br>
               <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(10,2,'odejmij')" >    
            </div>
            <div class="zmiana">
                <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(1,2,'odejmij')" >
            </div>      
            <div class="zmiana"> 
               <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(1,2,'dodaj')" >    
            </div>
            <div class="zmiana">
                x10 <br>
                <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(10,2,'dodaj')" >
            </div>
            <div class="ilosc" id="jednostka_2">0</div>
            <button type="button" style="width:100px;" class="btn btn-success" onclick="rekrutuj(2,jednostki[2])">Rekrutuj</button>
  
    </div>

</div>
<div class="jednostka">
   <div class="jednostkaimg">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Bestia kodo </b> <br>
        <img src="Grafika/orkowie/jednostki/kodo.png">
    <?php else : ?>
        <b> Kanonierzy </b> <br>
        <img src="Grafika/ludzie/jednostki/canon.png">
    <?php endif; ?>
       </div>
    <div class="parametry">
        <div class="parametry2">
            <b>Parametry:</b> <br>
            <img src='Grafika/icon/attack.png' style='width:20px; height:20px;' > 6<br>
            <img src='Grafika/icon/defense.png' style='width:20px; height:20px;' > 0<br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/hp.png' style='width:20px; height:20px;' > 15<br>
            <img src='Grafika/icon/armor.png' style='width:20px; height:20px;' > lekki <br>
        </div>  
       
        <div class="parametry2">
            <b>Wymagania:</b><br>
            <img src='Grafika/icon/gold.png' style='width:20px; height:20px;' > 150 <br>
            <img src='Grafika/icon/wood.png' style='width:20px; height:20px;' > 60 <br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/meat.png' style='width:20px; height:20px;' > 1<br>
            <img src='Grafika/icon/clock.png' style='width:20px; height:20px;' >  14    min.<br>
        </div>
    </div>
    <div class="jednostka_rekrutacja">
            <div class="zmiana"> 
                x10 <br>
               <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(10,3,'odejmij')" >    
            </div>
            <div class="zmiana">
                <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(1,3,'odejmij')" >
            </div>      
            <div class="zmiana"> 
               <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(1,3,'dodaj')" >    
            </div>
            <div class="zmiana">
                x10 <br>
                <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(10,3,'dodaj')" >
            </div>
            <div class="ilosc" id="jednostka_3">0</div>
            <button type="button" style="width:100px;" class="btn btn-success" onclick="rekrutuj(3,jednostki[3])">Rekrutuj</button>
  
    </div>

</div>
<div class="jednostka">
   <div class="jednostkaimg">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Szaman </b> <br>
        <img src="Grafika/orkowie/jednostki/shaman.png">
    <?php else : ?>
        <b> Czarodziejka </b> <br>
        <img src="Grafika/ludzie/jednostki/wizard.png">
    <?php endif; ?>
       </div>
    <div class="parametry">
        <div class="parametry2">
            <b>Parametry:</b> <br>
            <img src='Grafika/icon/attack.png' style='width:20px; height:20px;' > 3<br>
            <img src='Grafika/icon/defense.png' style='width:20px; height:20px;' > 2<br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/hp.png' style='width:20px; height:20px;' > 25<br>
            <img src='Grafika/icon/armor.png' style='width:20px; height:20px;' > lekki <br>
        </div>  
       
        <div class="parametry2">
            <b>Wymagania:</b><br>
            <img src='Grafika/icon/gold.png' style='width:20px; height:20px;' > 120 <br>
            <img src='Grafika/icon/wood.png' style='width:20px; height:20px;' > 60 <br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/meat.png' style='width:20px; height:20px;' > 1<br>
            <img src='Grafika/icon/clock.png' style='width:20px; height:20px;' >  12    min.<br>
        </div>
    </div>
    <div class="jednostka_rekrutacja">
            <div class="zmiana"> 
                x10 <br>
               <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(10,4,'odejmij')" >    
            </div>
            <div class="zmiana">
                <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(1,4,'odejmij')" >
            </div>      
            <div class="zmiana"> 
               <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(1,4,'dodaj')" >    
            </div>
            <div class="zmiana">
                x10 <br>
                <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(10,4,'dodaj')" >
            </div>
            <div class="ilosc" id="jednostka_4">0</div>
            <button type="button" style="width:100px;" class="btn btn-success" onclick="rekrutuj(4,jednostki[4  ])">Rekrutuj</button>
  
    </div>

</div>
<div class="jednostka">
   <div class="jednostkaimg">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Jezdziec nietoperza </b> <br>
        <img src="Grafika/orkowie/jednostki/bat.png">
    <?php else : ?>
        <b> Żyrokopter </b> <br>
        <img src="Grafika/ludzie/jednostki/gyro.png">
    <?php endif; ?>
       </div>
    <div class="parametry">
        <div class="parametry2">
            <b>Parametry:</b> <br>
            <img src='Grafika/icon/attack.png' style='width:20px; height:20px;' > 6<br>
            <img src='Grafika/icon/defense.png' style='width:20px; height:20px;' > 2<br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/hp.png' style='width:20px; height:20px;' > 20 <br>
            <img src='Grafika/icon/armor.png' style='width:20px; height:20px;' > lekki <br>
        </div>  
       
        <div class="parametry2">
            <b>Wymagania:</b><br>
            <img src='Grafika/icon/gold.png' style='width:20px; height:20px;' > 150 <br>
            <img src='Grafika/icon/wood.png' style='width:20px; height:20px;' > 60 <br>
        </div>
        <div class="parametry2">
            <img src='Grafika/icon/meat.png' style='width:20px; height:20px;' > 1<br>
            <img src='Grafika/icon/clock.png' style='width:20px; height:20px;' >  11    min.<br>
        </div>
    </div>
    <div class="jednostka_rekrutacja">
            <div class="zmiana"> 
                x10 <br>
               <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(10,5,'odejmij')" >    
            </div>
            <div class="zmiana">
                <img src='Grafika/icon/down.jpg' style='width:30px; height:30px;' onclick="wpisz(1,5,'odejmij')" >
            </div>      
            <div class="zmiana"> 
               <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(1,5,'dodaj')" >    
            </div>
            <div class="zmiana">
                x10 <br>
                <img src='Grafika/icon/up.jpg' style='width:30px; height:30px;' onclick="wpisz(10,5,'dodaj')" >
            </div>
            <div class="ilosc" id="jednostka_5">0</div>
            <button type="button" style="width:100px;" class="btn btn-success" onclick="rekrutuj(5,jednostki[5])">Rekrutuj</button>
  
    </div>

</div>
    

<script>
  
    var zasoby=[<?php echo json_encode($_SESSION['zloto']); ?>,<?php echo json_encode($_SESSION['drewno']); ?>];
    var jednostki=[0,0,0,0,0,0];
    var zloto=[150,120,200,150,120,150];
    var drewno=[40,30,60,60,60,60];
    var poprzednie_sekundy= <?php echo json_encode($_SESSION['sekundy']); ?>;
    var kolejka= <?php echo json_encode($_SESSION['kolejka_jednostek']); ?>;
    var czas_rekrutacji= new Date(<?php echo json_encode($_SESSION['czas_jednostek']); ?>).getTime();
    var rekrutacja=kolejka.split("-");
    var rasa=<?php echo json_encode($_SESSION['rasa']); ?>;
    var seconds=0;
    var utrzymanie=<?php echo json_encode($_SESSION['zywnosc']); ?>;
    var zywnosc= <?php echo json_encode($_SESSION['max_zywnosc']); ?>;
 // document.getElementById("kolejka").innerHTML=rekrutacja;
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
            document.getElementById("kolejka"+(i)).style.backgroundImage="url('Grafika/"+rasa+"/jednostki/"+obraz+".png')";
    }
    var now = new Date().getTime();    
    var distance = now-czas_rekrutacji;
    var sekundy = Math.floor(distance/1000)+ parseInt(poprzednie_sekundy);
    var zrekrutowane=0;
    
    sprawdz_kolejke();
  
//    document.getElementById("kolejka").innerHTML=nowa_kolejka+" "+czas_rekrutacji+" "+sekundy;
    var x = setInterval(function() {

    now = new Date().getTime(); 
    
    var rekrutacja_w_toku = now-czas_rekrutacji;
   // alert(now+" "+rekrutacja_w_toku);    
    // Time calculations for hours, minutes and seconds
    var hours = Math.floor((rekrutacja_w_toku % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((rekrutacja_w_toku % (1000 * 60 * 60)) / (1000 * 60));
    var seconds_timer = Math.floor((rekrutacja_w_toku % (1000 * 60)) / 1000);
    sekundy = Math.floor(rekrutacja_w_toku / 1000);

    // Display the result in the element with id="demo"
    // alert(rekrutacja_w_toku);
    document.getElementById("czas").innerHTML=minutes+"m "+seconds+"s " ;
    if(sprawdz_jednostke(rekrutacja[0])<sekundy && rekrutacja.length>1){
       sprawdz_kolejke();
    }    
    
}, 1000);
    
    
    
    
    function dodaj(nowa_kolejka,wykonane,sekundy){
         $.post('dodaj.php',{nowa_kolejka:nowa_kolejka, post_wykonane:wykonane, post_sekundy:sekundy},function(){
               location.reload();
            });
    }
     
    function wpisz(ile, co, akcja){
        if (akcja=="dodaj"){
            var nowa_ilosc=jednostki[co]+ile;
            jednostki[co]=nowa_ilosc;
            document.getElementById("jednostka_"+co).innerHTML=nowa_ilosc;
        }
        else {
            var nowa_ilosc=jednostki[co]-ile;
            if (nowa_ilosc<0){
                nowa_ilosc=0;
            }
            jednostki[co]=nowa_ilosc;
             document.getElementById("jednostka_"+co).innerHTML=nowa_ilosc;
        }
    }
    function rekrutuj(co, ile){
        if(zasoby[1]>=ile*drewno[co] && zasoby[0]>=ile*zloto[co]){
            var nowe_zloto=zasoby[0]-ile*zloto[co];
            var nowe_drewno=zasoby[1]-ile*drewno[co];
            $.post('rekrutuj.php',{post_ile: ile, post_jednostka:co, post_zloto:nowe_zloto, post_drewno:nowe_drewno},function(){
               location.reload();
            });
        }
        else{
            alert("za mało zasobów!");
        }   
    }
     function sprawdz_kolejke(){
         
        for(var i=0; i<rekrutacja.length; i++){
            if(rekrutacja[i]=="taureni" || rekrutacja[i]=="rycerze"){
                if(parseInt(utrzymanie)+2<=zywnosc){
                    if( sprawdz_jednostke(rekrutacja[i])<sekundy){
                        sekundy=sekundy-sprawdz_jednostke(rekrutacja[i]);
                        zrekrutowane++;
                    }
                    else{
                        break;
                    }
                }
                else{
                    odswiez();
                    document.getElementById("kolejka").innerHTML="Brak żywności";
                }
            }
            else{
                if(parseInt(utrzymanie)+1<=zywnosc){
                    if( sprawdz_jednostke(rekrutacja[i])<sekundy){
                        sekundy=sekundy-sprawdz_jednostke(rekrutacja[i]);
                        zrekrutowane++;
                    }
                    else{
                        break;
                    }
                }
                
                else{
                    odswiez();
                    document.getElementById("kolejka").innerHTML="Brak żywności";
                }
            }
        
        }
        if(zrekrutowane>0){
            var nowa_kolejka=(rekrutacja.slice(zrekrutowane,rekrutacja.length));
            var wykonane=(rekrutacja.slice(0,zrekrutowane)); 
            dodaj(nowa_kolejka.join("-"),wykonane.join("-"), sekundy);
        }
    }
    function sprawdz_jednostke(jednostka){
        var czas_r=0;
           switch(jednostka){
                case "siepacze": czas_r=720; break; 
                case "lowcy_glow": czas_r=600;  break;
                case "taureni": czas_r=900;  break;
                case "kodo": czas_r=840;  break;
                case "szamani": czas_r=720;  break;
                case "jezdzcy": czas_r=10;  break;
                case "miecznicy": czas_r=10;  break;
                case "strzelcy": czas_r=10;  break;
                case "rycerze": czas_r=900;  break;
                case "kanonierzy": czas_r=840;  break;
                case "czarodziejki": czas_r=720;  break;
                case "zyrokoptery": czas_r=660;  break;
            }
        return czas_r;
    }
    function odswiez(){
        $.post('odswiez.php',{},function(){
             
        });
    }
    
</script>

<?php
	include ('stopka.php');
?>