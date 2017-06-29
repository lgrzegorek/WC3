<?php
	include ('menu2.php');
?>

    <?php
        $user = $_SESSION['user'];
        $link = mysql_connect("localhost", "root", ""); 
        mysql_select_db("warcraft", $link);

        $result = mysql_query ("SELECT rasa FROM uzytkownicy WHERE user = '$user'", $link);
        $row = mysql_fetch_array( $result );
        $rasa = $row['rasa'];
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
        <?php if ($rasa == 'Orkowie') : ?>
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
            <b><?php echo $_SESSION['castle_lvl'] ?></b>
        </div>
   
    <div class="zakladka_img">
        <?php if ($rasa == 'Orkowie') : ?>
            <img src="Grafika/orkowie/budowle/hall.png">
        <?php else : ?>
            <img src="Grafika/ludzie/budowle/castle.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Ratusz pozwala na rekrutację robotników.
    </div>
  <div class="wymagania"><?php oblicz($_SESSION['castle_lvl'],'castle',true)?></div>
    <input type="text" style="width: 30px;">
    <div class="ulepsz" id="upRatusz">
      <?php wypisz($_SESSION['castle_lvl'],'castle')?>
    </div>
    <div class="czas"><?php czas($_SESSION['castle_lvl'],'castle') ?></div>
</div>
<div class="zakladka">
     
        <div class="nazwa">
            Koszary
        </div>
        <div class="level">
             <b><?php echo $_SESSION['barrack_lvl'] ?></b>
        </div>
    
   
    <div class="zakladka_img">
        <?php if ($rasa == 'Orkowie') : ?>
            <img src="Grafika/orkowie/budowle/barracks.png">
        <?php else : ?>
            <img src="Grafika/ludzie/budowle/barracks.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Koszary umożliwiają rekrutację jednostek, wraz ze wzrostem poziomu rekrutacja przebiega szybciej, a także daje możliwość rekrutacji kolejnych jednostek.
    </div>
    <div class="wymagania"><?php oblicz($_SESSION['barrack_lvl'],'barrack',true)?></div>
    <input type="text" style="width: 30px;">
    <div class="ulepsz">
          <?php wypisz($_SESSION['barrack_lvl'],'barrack')?>
    </div>
      <div class="czas"><?php czas($_SESSION['barrack_lvl'],'barrack') ?></div>
</div>
<div class="zakladka">
   
        <div class="nazwa">
            Ołtarz 
        </div>
        <div class="level">
            <b><?php echo $_SESSION['altar_lvl'] ?></b>
        </div>
    
   
    <div class="zakladka_img">
        <?php if ($rasa == 'Orkowie') : ?>
            <img src="Grafika/orkowie/budowle/altar.png">
        <?php else : ?>
            <img src="Grafika/ludzie/budowle/altar.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Ratusz pozwala na przywołanie, a także wskrzeszenie bohaterów. Co 10 poziomów możliwe jest przywołanie kolejnego bohatera.
    </div>
    <div class="wymagania"><?php oblicz($_SESSION['altar_lvl'],'altar',true)?></div>
     <input type="text" style="width: 30px;">
    <div class="ulepsz">
        <?php wypisz($_SESSION['altar_lvl'],'altar')?>
    </div>
     <div class="czas"><?php czas($_SESSION['altar_lvl'],'altar') ?></div>
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
     <div class="wymagania"><?php oblicz($_SESSION['forge_lvl'],'forge',true)?></div>
     <input type="text" style="width: 30px;">
    <div class="ulepsz">
         <?php wypisz($_SESSION['forge_lvl'],'forge')?>
    </div>
    <div class="czas"><?php czas($_SESSION['forge_lvl'],'forge') ?></div>
</div>
<div class="zakladka">
    
        <div class="nazwa">
            Farma
        </div>
        <div class="level">
            <b><?php echo $_SESSION['house_lvl'] ?></b>
        
    </div>
   
    <div class="zakladka_img">
        <?php if ($rasa == 'Orkowie') : ?>
            <img src="Grafika/orkowie/budowle/house.png">
        <?php else : ?>
            <img src="Grafika/ludzie/budowle/house.png">
        <?php endif; ?>
    </div>
    <div class="opis">
        Farmy wytwarzają żywność, która jest potrzebna do utrzymania jednostek. Każda farma dostarcza 10 jednostek pożywienia.
    </div>
     <div class="wymagania"><?php oblicz($_SESSION['house_lvl'],'house',true)?></div>
     <input type="text" style="width: 30px;">
    <div class="ulepsz">
         <?php wypisz($_SESSION['house_lvl'],'house')?>
    </div>
     <div class="czas"><?php czas($_SESSION['house_lvl'],'house') ?></div>
</div>
<div class="zakladka">
    <div class="nazwa">
        Magazyn złota
    </div>
    <div class="level">
        <b><?php echo $_SESSION['magazyn_zlota'] ?></b>
    </div>
    <div class="zakladka_img">
        <img src="Grafika/ludzie/budowle/magazyn_zlota.jpg">
    </div>
    <div class="opis">
        W magazynie złota przechowywane jest złoto. Im wyższy poziom magazynu tym więcej złota można posiadać.
    </div>
    <div class="wymagania">
        <?php oblicz($_SESSION['magazyn_zlota'],'magazyn_z',true)?>
    </div>
    <input type="text" style="width: 30px;">
    <div class="ulepsz">
         <?php wypisz($_SESSION['magazyn_zlota'],'magazyn_z')?>
    </div>
    <div class="czas">
        <?php czas($_SESSION['magazyn_zlota'],'magazyn_z') ?>
    </div>
</div>

<div class="zakladka">
    
        <div class="nazwa">
            Magazyn drewna
        </div>
        <div class="level">
            <b><?php echo $_SESSION['magazyn_drewna'] ?></b>
        
    </div>
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/budowle/magazyn_drewna.jpg">
    </div>
    <div class="opis">
        W magazynie drewna przechowywane jest drewno. Im wyższy poziom magazynu tym więcej drewna można posiadać.
    </div>
     <div class="wymagania"><?php oblicz($_SESSION['magazyn_drewna'],'magazyn_d',true)?></div>
     <input type="text" style="width: 30px;">
    <div class="ulepsz">
         <?php wypisz($_SESSION['magazyn_drewna'],'magazyn_d')?>
    </div>
     <div class="czas"><?php czas($_SESSION['magazyn_drewna'],'magazyn_d') ?></div>
</div>
<?php
	include ('stopka.php');
?>