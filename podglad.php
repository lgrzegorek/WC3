<?php
	include ('menu2.php');
	include('ranking.php');
    kolejka("jednostki");
    kolejka("budynek");
    kolejka("badanie");
    ruchy_wojsk();
?>

<div id="ruchy_wojsk">

</div>
<?php
	echo "<p>Witaj ".$_SESSION['user'].'!</p>';
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	echo "<p> </p>";
?>

<div>
	<?php
	if ($_SESSION['rasa'] == 'Orkowie') : ?>
		<img style="height: 50%; width: 50%; object-fit: contain" src="Grafika/orkowie/miasto/orc.jpeg">
	<?php else : ?>
		<img style="height: 50%; width: 50%; object-fit: contain" src="Grafika/ludzie/miasto/human.jpeg">
	<?php endif; ?>
</div>

<?php
$conn = new mysqli("localhost", "root", "", "warcraft");
$result = $conn->query("SELECT budowy, badania, jednostek FROM kolejki WHERE nick = '" . $_SESSION['user'] . "'");

$row = $result->fetch_assoc();
	
?>

<div>
	<div id="budowy" class="kolejki">
	Kolejka budowania: <br>
	</div>
	<div id="badania" class="kolejki">
	Kolejka badań: <br>
	</div>
	<div id="kolejka_jednostki" class="kolejki" >
    Kolejka jednostek: <br>
	</div>
</div>
<div>
	<div class="kolejki"> punkty: <?php echo $_SESSION['rankingKoncowy'] ?></div>
	<div class="kolejki"> ranking: <?php echo $_SESSION['ranking_gracza'] ?></div>
</div>

<?php
	include ('stopka.php');
?>

<script>
    for(var i=0; i<10; i++){
        $('#kolejka_jednostki').append("<div id='kolejka_jednostki"+i+"' class='kolejka_j'> x</div>");
    }
    var rasa=<?php echo json_encode($_SESSION['rasa']); ?>;
    var rekrutacja=<?php echo json_encode($_SESSION['kolejka_jednostek']); ?>.split("-");
    var budynek=<?php echo json_encode($_SESSION['budynek']); ?>;
    var badanie=<?php echo json_encode($_SESSION['badanie']); ?>;
    var wspolrzedna=<?php echo json_encode($_SESSION['wspolrzedna']); ?>;
    var ruchwojsk=<?php echo json_encode($_SESSION['ruchy_wojsk']); ?>;
    if(ruchwojsk){
        for(var i=0; i<Object.keys(ruchwojsk).length; i++){
            if(ruchwojsk[i]['z']==wspolrzedna && ruchwojsk[i]['misja']=="stacjonowanie"){
                    $('#ruchy_wojsk').append("Twoje wojska stacjonują w mieście "+ruchwojsk[i]['do']+" pozostaną tam jeszcze przez :<div id='czas_"+i+ "' style='display: inline-block;'></div> <br>");
            }
            else if(ruchwojsk[i]['z']==wspolrzedna){
                    $('#ruchy_wojsk').append('Twoje wojska kierują się w stronę miasta '+ruchwojsk[i]['do']+" dotrą tam za <div id='czas_"+i+ "' style='display: inline-block;'></div> o godzinie: "+ruchwojsk[i]['czas_dotarcia']+'<br>');
            }
            else if(ruchwojsk[i]['do']==wspolrzedna && ruchwojsk[i]['faza']==0){
                      $('#ruchy_wojsk').append("Do Twojego miasta powraca armia z miasta "+ruchwojsk[i]['z']+" oczekiwany czas dotarcia:<div id='czas_"+i+ "' style='display: inline-block;'></div> "+ruchwojsk[i]['czas_dotarcia']+"<br>");
            }
            else{
                    $('#ruchy_wojsk').append("W stronę Twojego miasta kieruje się armia z miasta "+ruchwojsk[i]['z']+" oczekiwany czas dotarcia:<div id='czas_"+i+ "' style='display: inline-block;'></div> "+ruchwojsk[i]['czas_dotarcia']+"<br>");
            }
        }
    }
    
    
    if(budynek!="0"){
            $("#budowy").append("<img src=Grafika/"+rasa+"/budowle/"+budynek+".png>")    
    }
    if(badanie!="0"){
            $("#badania").append("<img src=Grafika/"+rasa+"/ulepszenia/up1.png>")    
    }
    var x = setInterval(function() {
    
    now = new Date().getTime(); 
        if(ruchwojsk[0]!=null){
            for(var i=0; i<Object.keys(ruchwojsk).length; i++){
                var nowa_data= new Date(ruchwojsk[i]['czas_dotarcia']).getTime();
                var pozostaly_czas= nowa_data-now;
                var godziny = Math.floor((pozostaly_czas % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minuty = Math.floor((pozostaly_czas % (1000 * 60 * 60)) / (1000 * 60));
                var sekundy = Math.floor((pozostaly_czas % (1000 * 60)) / 1000);
                if(pozostaly_czas>0){
                    if(godziny>0){
                        document.getElementById('czas_'+i).innerHTML=godziny + "h " + minuty + "m " + sekundy + "s ";
                    }
                    else if(godziny<=0 && minuty>0){
                        document.getElementById('czas_'+i).innerHTML=minuty + "m " + sekundy + "s ";
                    }
                    else{
                        document.getElementById('czas_'+i).innerHTML=sekundy + "s ";
                    }
                }
                else{
                    $.post('ruch_wojsk.php',{id:ruchwojsk[i]['id']},function(data){
                        alert(data);
                        location.reload();
                        
                });
                }
            }
        }
    }, 1000);
    
/*    var rekrutacja_w_toku = now-czas_rekrutacji;
    if(jednostka1-sekundy>=0)
    var nowadata= new Date(ruchwojsk[i]['czas_dotarcia'].getTime());
            var pozostaly_czas= nowadata-now;
            $('#czas_'+i).innerHTML=pozostaly_czas;
            document.getElementById('czas_'+i).innerHTML=pozostaly_czas;
    document.getElementById("czas").innerHTML=Math.floor((jednostka1-sekundy)/60)+"m. "+((jednostka1-sekundy)%60)+"s.";    
   // alert(now+" "+rekrutacja_w_toku);    
    // Time calculations for hours, minutes and seconds
    var hours = Math.floor((rekrutacja_w_toku % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((rekrutacja_w_toku % (1000 * 60 * 60)) / (1000 * 60));
    var seconds_timer = (jednostka1-Math.floor((rekrutacja_w_toku % (1000 * 60)) / 1000))%60;
    var minutes_timer = Math.floor(jednostka1-Math.floor(((rekrutacja_w_toku % (1000 * 60)) / 1000))/60);
    sekundy = Math.floor(rekrutacja_w_toku / 1000);

    // Display the result in the element with id="demo"
    // alert(rekrutacja_w_toku);
    if(rekrutacja[0])
    //document.getElementById("czas").innerHTML=minutes_timer+"m "+seconds_timer+"s " ;
    if(sprawdz_jednostke(rekrutacja[0])<sekundy && rekrutacja.length>1){
       sprawdz_kolejke();
    }    
  */  

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
                    case "robotnicy": obraz="worker";
                }          
            }
            document.getElementById("kolejka_jednostki"+(i-1)).style.backgroundImage="url('Grafika/"+rasa+"/jednostki/"+obraz+".png')";
    }
</script>
