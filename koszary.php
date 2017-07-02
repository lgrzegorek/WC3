<?php
	include ('menu2.php');
?>

<div class="jednostka">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Siepacz </b> <br>
        <img src="Grafika/orkowie/jednostki/grunt.png">
    <?php else : ?>
        <b> Piechur </b> <br>
        <img src="Grafika/ludzie/jednostki/footman.png">
    <?php endif; ?>
    <div class="parametry">
        Atk: 4<br>
        Obr: 5<br>
        HP: 25<br>
        Pan: S
    </div>
    <div class="parametry">
        Zł: 150 <br>
        Dr: 40 <br>
        Poż: 1<br>
        Cza: 12min.<br>
    </div>
    <div class="rekrutuj">
        <form>
            <input type="text" style="width:30px;">
            <button type="button" style="width:100px;" class="btn btn-success">Rekrutuj</button>
        </form>
    </div>

</div>

<div class="jednostka">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Łowca Głów </b> <br>
        <img src="Grafika/orkowie/jednostki/headhunter.png">
    <?php else : ?>
        <b> Strzelec </b> <br>
        <img src="Grafika/ludzie/jednostki/sniper.png">
    <?php endif; ?>
    <div class="parametry">
        Atk:5 <br>
        Obr:1 <br>
        HP:20 <br>
        Pan: L
        
    </div>
    <div class="parametry">
        Zł: 200 <br>
        Dr: 30 <br>
        Poż:1 <br>
        Cza:15 min.<br>
    </div>
    <div class="rekrutuj">
        <form>
            <input type="text" style="width:30px; display:inline-block;">
            <button type="button" style="width:100px;" class="btn btn-success" style="display:inline-block;">Rekrutuj</button>
        </form>
    </div>

</div>

<div class="jednostka">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Jeździec Wilka </b> <br>
        <img src="Grafika/orkowie/jednostki/rider.png">
    <?php else : ?>
        <b> Rycerz </b> <br>
        <img src="Grafika/ludzie/jednostki/knight.png">
    <?php endif; ?>
    <div class="parametry">
        Atk:7 <br>
        Obr:5 <br>
        HP:50 <br>
        Pan: C
    </div>
    <div class="parametry">
        Zł: 300 <br>
        Dr: 80 <br>
        Poż:2 <br>
        Cza:30 min. <br>
    </div>
    <div class="rekrutuj">
        <form>
            <input type="text" style="width:30px;">
            <button type="button" style="width:100px;" class="btn btn-success">Rekrutuj</button>
        </form>
    </div>

</div>
<div class="jednostka">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Katapulta </b> <br>
        <img src="Grafika/orkowie/jednostki/kodo.png">
    <?php else : ?>
        <b> Kanonierzy </b> <br>
        <img src="Grafika/ludzie/jednostki/canon.png">
    <?php endif; ?>
    <div class="parametry">
        Atk:6 <br>
        Obr:0 <br>
        HP:20 <br>
        Pan: L
    </div>
    <div class="parametry">
        Zł: 200 <br>
        Dr: 60 <br>
        Poż:2 <br>
        Cza:25 min.<br>
    </div>
    <div class="rekrutuj">
        <form>
            <input type="text" style="width:30px;">
            <button type="button" style="width:100px;" class="btn btn-success">Rekrutuj</button>
        </form>
    </div>

</div>

<div class="jednostka">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Doktor Voodoo </b> <br>
        <img src="Grafika/orkowie/jednostki/vodo.png">
    <?php else : ?>
        <b> Czarodziejka </b><br>
        <img src="Grafika/ludzie/jednostki/wizard.png">
    <?php endif; ?>
    <div class="parametry">
        Atk:6 <br>
        Obr:3 <br>
        HP:35 <br>
        Pan: S
    </div>
    <div class="parametry">
        Zł: 250 <br>
        Dr: 50 <br>
        Poż:2 <br>
        Cza:25 min.<br>
    </div>
    <div class="rekrutuj">
        <form>
            <input type="text" style="width:30px; display:inline-block;">
            <button type="button" style="width:100px;" class="btn btn-success" style="display:inline-block;">Rekrutuj</button>
        </form>
    </div>

</div>

<div class="jednostka">
    <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
        <b> Szaman </b> <br>
        <img src="Grafika/orkowie/jednostki/shaman.png">
    <?php else : ?>
        <b> Kapłan </b> <br>
        <img src="Grafika/ludzie/jednostki/priest.png">
    <?php endif; ?>
    <div class="parametry">
        Atk:7 <br>
        Obr:3 <br>
        HP:40 <br>
        Pan: L
    </div>
    <div class="parametry">
       Zł: 200 <br>
        Dr: 20 <br>
        Poż:2 <br>
        Cza: 25 min.<br>
    </div>
    <div class="rekrutuj">
        <form>
            <input type="text" style="width:30px;">
            <button type="button" style="width:100px;" class="btn btn-success">Rekrutuj</button>
        </form>
    </div>

</div>
<?php
	include ('stopka.php');
?>