<?php
	include ('menu2.php');
    sprawdz_mape();
?>

<h1> Twoje wojska: </h1>
<div class="jednostka_garnizon">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Siepacze </b> <br><br>
            <img src="Grafika/orkowie/jednostki/grunt.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_0"> <?php echo $_SESSION['siepacze']?> </div> <br>
            </div>
        <?php else : ?>
            <b> Piechurzy </b> <br><br>
            <img src="Grafika/ludzie/jednostki/footman.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_0"><?php echo $_SESSION['miecznicy']?></div><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka_garnizon">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Łowcy_głów </b> <br><br>
            <img src="Grafika/orkowie/jednostki/headhunter.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_1"><?php echo $_SESSION['lowcy_glow']?></div><br>
            </div>
        <?php else : ?>
            <b> Strzelcy </b> <br><br>
            <img src="Grafika/ludzie/jednostki/sniper.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_1"><?php echo $_SESSION['strzelcy']?></div><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka_garnizon">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Taureni </b> <br><br>
            <img src="Grafika/orkowie/jednostki/tauren.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_2"><?php echo $_SESSION['taureni']?></div><br>
            </div>
        <?php else : ?>
            <b> Rycerze </b> <br><br>
            <img src="Grafika/ludzie/jednostki/knight.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_2"><?php echo $_SESSION['rycerze']?></div><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka_garnizon">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Kodo </b> <br><br>
            <img src="Grafika/orkowie/jednostki/kodo.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_3"><?php echo $_SESSION['kodo']?></div><br>
            </div>
        <?php else : ?>
            <b> Kanonierzy </b> <br><br>
            <img src="Grafika/ludzie/jednostki/canon.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_3"><?php echo $_SESSION['kanonierzy']?></div><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka_garnizon">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Szamani </b> <br><br>
            <img src="Grafika/orkowie/jednostki/shaman.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_4"><?php echo $_SESSION['szamani']?></div><br>
            </div>
        <?php else : ?>
            <b> Czarodziejki </b> <br><br>
            <img src="Grafika/ludzie/jednostki/wizard.png">  <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_4"><?php echo $_SESSION['czarodziejki']?></div><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka_garnizon">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Jeźdźcy </b> <br><br>
            <img src="Grafika/orkowie/jednostki/bat.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_5"><?php echo $_SESSION['jezdzcy']?></div><br>
            </div>
        <?php else : ?>
            <b> Żyrokoptery </b> <br><br>
            <img src="Grafika/ludzie/jednostki/gyro.png"> <br> <br>
            <div class="parametry">
                Ilość: <div id="ilosc_5"><?php echo $_SESSION['zyrokoptery']?></div><br>
            </div>
        <?php endif; ?>

</div> 
    
<h1>Wyślij wojska</h1>
<div class="jednostka_garnizon">
    <img src="Grafika/icon/down.jpg "  style="width: 30px; height: 30px;" onclick="zmien(0,'odejmij')">
       <div id="garnizon_0" class="jednostka_garnizon"> 0 </div>
    <img src="Grafika/icon/up.jpg "  style="width: 30px; height: 30px;" onclick="zmien(0,'dodaj')">
</div>

<div class="jednostka_garnizon">
    <img src="Grafika/icon/down.jpg " style="width: 30px; height: 30px;" onclick="zmien(1,'odejmij')">
         <div id="garnizon_1" class="jednostka_garnizon"> 0 </div>
    <img src="Grafika/icon/up.jpg " style="width: 30px; height: 30px;" onclick="zmien(1,'dodaj')">
</div>

<div class="jednostka_garnizon">
    <img src="Grafika/icon/down.jpg "  style="width: 30px; height: 30px;" onclick="zmien(2,'odejmij')">
         <div id="garnizon_2" class="jednostka_garnizon"> 0 </div>
    <img src="Grafika/icon/up.jpg "  style="width: 30px; height: 30px;" onclick="zmien(2,'dodaj')">    
</div>

<div class="jednostka_garnizon">
    <img src="Grafika/icon/down.jpg"  style="width: 30px; height: 30px;" onclick="zmien(3,'odejmij')">
         <div id="garnizon_3" class="jednostka_garnizon"> 0 </div>
    <img src="Grafika/icon/up.jpg" style="width: 30px; height: 30px;" onclick="zmien(3,'dodaj')">
</div>

<div class="jednostka_garnizon">
    <img src="Grafika/icon/down.jpg" style="width: 30px; height: 30px;" onclick="zmien(4,'odejmij')">
         <div id="garnizon_4" class="jednostka_garnizon"> 0 </div>
    <img src="Grafika/icon/up.jpg" style="width: 30px; height: 30px;" onclick="zmien(4,'dodaj')">
</div>

<div class="jednostka_garnizon">
    <img src="Grafika/icon/down.jpg" style="width: 30px; height: 30px;" onclick="zmien(5,'odejmij')">
         <div id="garnizon_5" class="jednostka_garnizon"> 0 </div>
    <img src="Grafika/icon/up.jpg" style="width: 30px; height: 30px;" onclick="zmien(5,'dodaj')">
</div>

<div class="mnoznik">
    <div id="mnoznik">Mnożnik: 1 </div> 
    <button type="button" style="width:100px;" class="btn btn-warning" onclick="zmien_mnoznik()">Zmien</button>
</div> 


<div class="panelmisji2">
	<h1> Gracz </h1>
</div>
<div class="panelmisji2">
	<h1> Misja </h1>
</div>
<div class="panelmisji2">
	<h1> Parametry </h1>
</div>

<?php
	$wspolrzedne = $_SESSION['wspolrzedne'];
?>

<div class="panelmisji">
	<select id="wyborgracza" style="color: black">
		<?php
		for( $i=0 ; $i<sizeof($wspolrzedne) ; $i++ ){
			for ( $j=0 ; $j<1 ; $j++ ){ ?>
			<option value="<?php echo $wspolrzedne[$i][$j+1] ?>"><?php echo $wspolrzedne[$i][$j] . ' poz. ' . $wspolrzedne[$i][$j+1]; ?></option>
			<?php }
		} ?>
	</select>
</div>
	
<div class="panelmisji">
	<form name="wybormisji">
		<input type="radio" name="misja" value="0" checked onclick="wybierzakcje(0)"> Atakuj <br>
		<input type="radio" name="misja" value="1" onclick="wybierzakcje(1)"> Transportuj <br>
		<input type="radio" name="misja" value="2" onclick="wybierzakcje(2)"> Stacjonuj <br>
	</form>
</div>

<div class="panelmisji">
	<form name="wyborparametru">
	<p id="parametr" style="float: left"> </p>
	
		<div id="wartosc1"><input id="form1" type="number" name="quantity" style="display: none; width: 100px; color: black; float: left"></div>
		
	<p id="parametr2" style="float: left"> </p>
	
		<div><input id="form2" type="number" name="quantity2" style="display: none; width: 100px; color: black; float: left"></div>
		
	</form>
</div>

<button type="button" style="width:100px;" class="btn btn-warning" onclick="pobierzparametry()"> Wyślij! </button>



<?php
	include ('stopka.php');
?>

<script>
    
   var ilosc = [parseInt($('#ilosc_0').text()),parseInt($('#ilosc_1').text()),parseInt($('#ilosc_2').text()),parseInt($('#ilosc_3').text()),parseInt($('#ilosc_4').text()),parseInt($('#ilosc_5').text())];
   var wysylane=[0,0,0,0,0,0];
   var mnoznik=1;
   var wspolrzedne=<?php echo json_encode($_SESSION['wspolrzedne']); ?>;
   var atak;
	
	function wybierzakcje(parametr){
		if (parametr == 0){
		document.getElementById("parametr").innerHTML = "Szybkość poruszania się [%]:";

		document.getElementById("wartosc1").innerHTML = "<select id='wyborspeed' style='color: black'><option value='10'>10</option><option value='20'>20</option><option value='30'>30</option><option value='40'>40</option><option value='50'>50</option><option value='60'>60</option><option value='70'>70</option><option value='80'>80</option><option value='90'>90</option><option value='100'>100</option></select>";
		document.getElementById("form2").style.display = "none";
		document.getElementById("parametr2").style.display = "none";
		}
		else if(parametr == 1){
		document.getElementById("wartosc1").innerHTML = "<input id='form1' type='number' name='quantity' style='display: none; width: 100px; color: black; float: left'>"
		document.getElementById("parametr2").style.display = "unset";
		document.getElementById("form2").style.display = "unset";
		document.getElementById("form1").style.display = "unset";
		document.getElementById("parametr").innerHTML = "Złoto:";
		document.getElementById("parametr2").innerHTML = "Drewno:";
		}
		else{
		document.getElementById("wartosc1").innerHTML = "<input id='form1' type='number' name='quantity' style='display: none; width: 100px; color: black; float: left'>"
		document.getElementById("parametr2").style.display = "unset";
		document.getElementById("form2").style.display = "unset";
		document.getElementById("form1").style.display = "unset";
		document.getElementById("parametr").innerHTML = "Dni:";
		document.getElementById("parametr2").innerHTML = "Godzin:";
		}
	}
	
	function pobierzparametry(){
		var e = document.getElementById("wyborgracza");
		var gracz = e.options[e.selectedIndex].value;
		var misja = document.forms["wybormisji"]["misja"].value;
		if (misja == 0) { 		
            var x = document.getElementById("wyborspeed");
            var par1 = x.options[x.selectedIndex].value; 
            var par2=0;
        }
		else {
		var par1 = document.forms["wyborparametru"]["quantity"].value;
		var par2 = document.forms["wyborparametru"]["quantity2"].value;
		}
        $.post('wymarsz.php',{jednostki:wysylane, pozycja :gracz, misja:misja,parametr1: par1,parametr2: par2},function(data){
            alert(data);
            location.reload();
        });
	}
       

    
    
   function zmien(jednostka, akcja){
        if (akcja=='dodaj'){
            if(ilosc[jednostka]-mnoznik>=0){ 
                ilosc[jednostka]-=mnoznik;
                wysylane[jednostka]+=mnoznik;
            }
            else{
                wysylane[jednostka]+=ilosc[jednostka];
                ilosc[jednostka]=0;
            }

        }
        else{
            if(wysylane[jednostka]-mnoznik>=0){
                ilosc[jednostka]+=mnoznik;
                wysylane[jednostka]-=mnoznik;
            }
            else{
                ilosc[jednostka]+=wysylane[jednostka];
                wysylane[jednostka]=0;
            }
        }
        document.getElementById("ilosc_"+jednostka).innerHTML=ilosc[jednostka];
        document.getElementById("garnizon_"+jednostka).innerHTML=wysylane[jednostka];
    }
    function zmien_mnoznik(){
        if (mnoznik==10){
            mnoznik=1;
        }
        else{ 
            mnoznik=10
        }
        document.getElementById("mnoznik").innerHTML="Mnożnik: "+mnoznik;
    }
    function compareColumn(a, b) {
        if (parseInt(a[1]) === parseInt(b[1])) {
            return 0;
        }
        else {
            return (a[1] < b[1]) ? -1 : 1;
        }
    }

</script>
