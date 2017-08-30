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

<div class="panelmisji">
	<h1> Gracz </h1>
</div>
<div class="panelmisji">
	<h1> Misja </h1>
</div>
<div class="panelmisji">
	<h1> Parametry </h1>
</div>

<?php
	$wspolrzedne = $_SESSION['wspolrzedne'];
?>

<div class="panelmisji">
	<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Wybierz gracza: 
  <span class="caret"></span></button>
		<ul class="dropdown-menu">
		
		<?php
		for( $i=0 ; $i<sizeof($wspolrzedne) ; $i++ ){
			for ( $j=0 ; $j<1 ; $j++ ){ ?>
			<li><a href="#"><?php echo $wspolrzedne[$i][$j] . ' poz. ' . $wspolrzedne[$i][$j+1]; ?></a></li>
			<?php }
		} ?>
		
		</ul>
	</div>
</div>

<div class="panelmisji">
  <button type="button" class="btn btn-primary" onclick="wybierzakcje(0)">Atakuj</button>
  <button type="button" class="btn btn-primary" onclick="wybierzakcje(1)">Transportuj</button>
  <button type="button" class="btn btn-primary" onclick="wybierzakcje(2)">Stacjonuj</button>
</div>

<div class="panelmisji">
	<form>
	<p id="parametr" style="float: left"> </p>
		<input id="form1" type="number" name="quantity" style="width: 100px; color: black; float: left">
	<p id="parametr2" style="float: left"> </p>
		<input id="form2" type="number" name="quantity2" style="width: 100px; color: black; float: left">
	</form>
</div>

<div class="jednostka_garnizon">
    <button type="button" style="width:100px;" class="btn btn-warning" onclick=" "> Wyślij! </button>
</div> 

</div>


<?php
	include ('stopka.php');
?>

<script>
    
   var ilosc = [parseInt($('#ilosc_0').text()),parseInt($('#ilosc_1').text()),parseInt($('#ilosc_2').text()),parseInt($('#ilosc_3').text()),parseInt($('#ilosc_4').text()),parseInt($('#ilosc_5').text())];
   var wysylane=[0,0,0,0,0,0];
   var mnoznik=1;
   var wspolrzedne=<?php echo json_encode($_SESSION['wspolrzedne']); ?>;
   var atak;
   wspolrzedne.sort(compareColumn);
    alert(wspolrzedne);
	
	function wybierzakcje(parametr){
		var atak = parametr;
		if (parametr == 0){
		document.getElementById("parametr").innerHTML = "Szybkość:";
		document.getElementById("form2").style.display = "none";
		document.getElementById("parametr2").style.display = "none";
		}
		else if(parametr == 1){
		document.getElementById("parametr2").style.display = "unset";
		document.getElementById("form2").style.display = "unset";
		document.getElementById("parametr").innerHTML = "Złoto:";
		document.getElementById("parametr2").innerHTML = "Drewno:";
		}
		else{
		document.getElementById("parametr2").style.display = "unset";
		document.getElementById("form2").style.display = "unset";
		document.getElementById("parametr").innerHTML = "Dni:";
		document.getElementById("parametr2").innerHTML = "Godziny:";
		}
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
    function wymarsz(){
       $("#x").load("garnizon2.php");
        for (var i=0 ; i<6; i++){
            document.getElementById("obraz_"+i).innerHTML= "unuansduansd <img src='Grafika/orkowie/jednostki/bat.png'>";
            document.getElementById("ilosc_"+i).innerHTML=wysylane[i];
        }
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