<?php
	include ('menu2.php');
?>

<h1> Twoje wojska: </h1>
<div class="jednostka">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Siepacze </b> <br><br>
            <img src="Grafika/orkowie/jednostki/grunt.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['siepacze']?><br>
            </div>
        <?php else : ?>
            <b> Piechurzy </b> <br><br>
            <img src="Grafika/ludzie/jednostki/footman.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['miecznicy']?><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Katapulty </b> <br><br>
            <img src="Grafika/orkowie/jednostki/kodo.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['katapulty']?><br>
            </div>
        <?php else : ?>
            <b> Strzelcy </b> <br><br>
            <img src="Grafika/ludzie/jednostki/sniper.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['strzelcy']?><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Łowcy Głów </b> <br><br>
            <img src="Grafika/orkowie/jednostki/headhunter.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['lowcy_glow']?><br>
            </div>
        <?php else : ?>
            <b> Kanonierzy </b> <br><br>
            <img src="Grafika/ludzie/jednostki/canon.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['kanonierzy']?><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Szamani </b> <br><br>
            <img src="Grafika/orkowie/jednostki/shaman.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['szamani']?><br>
            </div>
        <?php else : ?>
            <b> Kapłani </b> <br><br>
            <img src="Grafika/ludzie/jednostki/priest.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['kaplani']?><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Doktorzy Voodoo </b> <br><br>
            <img src="Grafika/orkowie/jednostki/vodo.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['doktorzy']?><br>
            </div>
        <?php else : ?>
            <b> Czarodziejki </b> <br><br>
            <img src="Grafika/ludzie/jednostki/wizard.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['czarodziejki']?><br>
            </div>
        <?php endif; ?>

</div> 

<div class="jednostka">

        <?php if ($_SESSION['rasa'] == 'Orkowie') : ?>
            <b> Jeźdźcy wilków </b> <br><br>
            <img src="Grafika/orkowie/jednostki/rider.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['jezdzcy']?><br>
            </div>
        <?php else : ?>
            <b> Rycerze </b> <br><br>
            <img src="Grafika/ludzie/jednostki/knight.png">
            <div class="parametry">
                Ilość: <?php echo $_SESSION['rycerze']?><br>
            </div>
        <?php endif; ?>

</div> 

<?php
	include ('stopka.php');
?>