<?php
	include ('menu2.php');
    include ('skrypt.php');
  
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
    <div class="chopki"><img src="Grafika/ludzie/jednostki/worker.png"></div>
  <div class="akcja"> Akcja:</div>
  <div class="czas" style="text-align:left;">Czas:</div>
    

</div>

<div class="zakladka">
    
        <div class="nazwa">
            Ratusz
        </div>
        <div class="level">
            <b><?php echo $_SESSION['castle_lvl'] ?></b>
        </div>
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/budowle/castle.png">
    </div>
    <div class="opis">
        Ratusz pozwala na rekrutację robotników.
    </div>
  <div class="wymagania"><?php oblicz($_SESSION['castle_lvl'],'castle',true)?></div>
    <input type="text" style="width: 30px;">
    <div class="ulepsz" id="upRatusz">
      <?php wypisz(($_SESSION['castle_lvl']+1),'castle')?>
    </div>
    <div class="czas"><?php czas(($_SESSION['castle_lvl']+1),'castle') ?></div>
</div>
<div class="zakladka">
     
        <div class="nazwa">
            Koszary
        </div>
        <div class="level">
             <b><?php echo $_SESSION['barrack_lvl'] ?></b>
        </div>
    
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/budowle/barracks.png">
    </div>
    <div class="opis">
        Koszary umożliwiają rekrutację jednostek, wraz ze wzrostem poziomu rekrutacja przebiega szybciej, a także daje możliwość rekrutacji kolejnych jednostek.
    </div>
    <div class="wymagania"><?php oblicz(($_SESSION['barrack_lvl']+1),'barrack',true)?></div>
    <input type="text" style="width: 30px;">
    <div class="ulepsz">
          <?php wypisz(($_SESSION['barrack_lvl']+1),'barrack')?>
    </div>
      <div class="czas"><?php czas(($_SESSION['barrack_lvl']+1),'barrack') ?></div>
</div>
<div class="zakladka">
   
        <div class="nazwa">
            Ołtarz 
        </div>
        <div class="level">
            <b><?php echo $_SESSION['altar_lvl'] ?></b>
        </div>
    
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/budowle/altar.png">
    </div>
    <div class="opis">
        Ratusz pozwala na przywołanie, a także wskrzeszenie bohaterów. Co 10 poziomów możliwe jest przywołanie kolejnego bohatera.
    </div>
    <div class="wymagania"><?php oblicz(($_SESSION['altar_lvl']+1),'altar',true)?></div>
     <input type="text" style="width: 30px;">
    <div class="ulepsz">
        <?php wypisz(($_SESSION['altar_lvl']+1),'altar')?>
    </div>
     <div class="czas"><?php czas(($_SESSION['altar_lvl']+1),'altar') ?></div>
</div>
<div class="zakladka">
    
        <div class="nazwa">
            Kuźnia
        </div>
        <div class="level">
         <b><?php echo $_SESSION['forge_lvl'] ?></b>
        </div>
  
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/budowle/forge.png">
    </div>
    <div class="opis">
        Kuźnia pozwala na dokonywanie badań w zakresie ulepszeń jednostek, wyższe poziomy kuźni odblokowują wyższe poziomy ulepszeń.
    </div>
     <div class="wymagania"><?php oblicz(($_SESSION['forge_lvl']+1),'forge',true)?></div>
     <input type="text" style="width: 30px;">
    <div class="ulepsz">
         <?php wypisz(($_SESSION['forge_lvl']+1),'forge')?>
    </div>
    <div class="czas"><?php czas(($_SESSION['forge_lvl']+1),'forge') ?></div>
</div>
<div class="zakladka">
    
        <div class="nazwa">
            Farma
        </div>
        <div class="level">
            <b><?php echo $_SESSION['house_lvl'] ?></b>
        
    </div>
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/budowle/house.png">
    </div>
    <div class="opis">
        Farmy wytwarzają żywność, która jest potrzebna do utrzymania jednostek. Każda farma dostarcza 10 jednostek pożywienia.
    </div>
     <div class="wymagania"><?php oblicz(($_SESSION['house_lvl']+1),'house',true)?></div>
     <input type="text" style="width: 30px;">
    <div class="ulepsz">
         <?php wypisz(($_SESSION['house_lvl']+1),'house')?>
    </div>
     <div class="czas"><?php czas(($_SESSION['house_lvl']+1),'house') ?></div>
</div>
<?php
	include ('stopka.php');
?>
