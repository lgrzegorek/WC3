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
    
  <div class="akcja" style="margin-left: 1%;"> Akcja:</div>
 <div class="czas">Czas:</div>
    

</div>
<div class="zakladka">
        <div class="nazwa">
            Technologia drewna
        </div>
        <div class="level">
            <?php echo $_SESSION['t_drewna'] ?>
        </div>
   
    <div class="zakladka_img">
        <img src="Grafika/icon/lumber_level.png">
    </div>
    <div class="opis">
        Technologia drewna pozwala bardziej efektywnie zdobywać drewno.
    </div>
  <div class="wymagania"><?php oblicz($_SESSION['t_drewna'],'badania',true)?></div>
    <div class="ulepsz">
        <?php wypisz($_SESSION['t_drewna'],'badania')?>
    </div>
   <div class="czas"><?php czas($_SESSION['t_drewna'],'badania') ?></div>
</div>

<div class="zakladka">
    
        <div class="nazwa">
            Technologia wydobycia
        </div>
        <div class="level">
           <?php echo $_SESSION['t_wydobycia'] ?>
        </div>
  
   
    <div class="zakladka_img">
        <img src="Grafika/icon/mining_level.png">
    </div>
    <div class="opis">
        Technologia wydobycia pozwala bardziej efektywnie wydobywać złoto.
    </div>
  <div class="wymagania"><?php oblicz($_SESSION['t_wydobycia'],'badania',true)?></div>
    <div class="ulepsz">
         <?php wypisz($_SESSION['t_wydobycia'],'badania')?>
    </div>
    <div class="czas"><?php czas($_SESSION['t_wydobycia'],'badania') ?></div>
</div>

<div class="zakladka">
    
        <div class="nazwa">
            Technologia uzbrojenia
        </div>
        <div class="level">
            <?php echo $_SESSION['t_uzbrojenia'] ?>
        </div>
    
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/ulepszenia/up3.png">
    </div>
    <div class="opis">
        Technologia uzbrojenia zwiększa atak jednostek walczących wręcz.
    </div>
   <div class="wymagania"><?php oblicz($_SESSION['t_uzbrojenia'],'badania',true)?></div>
    <div class="ulepsz">
         <?php wypisz($_SESSION['t_uzbrojenia'],'badania')?>
    </div>
    <div class="czas"><?php czas($_SESSION['t_uzbrojenia'],'badania') ?></div>
</div>

<div class="zakladka">
   
        <div class="nazwa">
            Technologia broni palnej
        </div>
        <div class="level">
           <?php echo $_SESSION['t_bronipalnej'] ?>
        </div>
   
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/ulepszenia/up5.png">
    </div>
    <div class="opis">
        Technologia broni palnej zwiększa atak jednostek walczących na dystans.
    </div>
   <div class="wymagania"><?php oblicz($_SESSION['t_bronipalnej'],'badania',true)?></div>
    <div class="ulepsz">
         <?php wypisz($_SESSION['t_bronipalnej'],'badania')?>
    </div>
     <div class="czas"><?php czas($_SESSION['t_bronipalnej'],'badania') ?></div>
</div>

<div class="zakladka">
  
        <div class="nazwa">
            Technologia opancerzenia
        </div>
        <div class="level">
            <?php echo $_SESSION['t_opancerzenia'] ?>
        </div>
    
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/ulepszenia/up4.png">
    </div>
    <div class="opis">
        Technologia opancerzenia zwięsza pancerz lekko uzbrojonych jednostek.
    </div>
   <div class="wymagania"><?php oblicz($_SESSION['t_opancerzenia'],'badania',true)?></div>
    <div class="ulepsz">
         <?php wypisz($_SESSION['t_opancerzenia'],'badania')?>
    </div>
     <div class="czas"><?php czas($_SESSION['t_opancerzenia1'],'badania') ?></div>
</div>


<div class="zakladka">
    
        <div class="nazwa">
            Technologia opancerzenia 2.
        </div>
        <div class="level">
           <?php echo $_SESSION['t_opancerzenia1'] ?>
        </div>
    
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/ulepszenia/up6.png">
    </div>
    <div class="opis">
        Technologia opancerzenia zwięsza pancerz cięzko uzbrojonych jednostek.
    </div>
   <div class="wymagania"><?php oblicz($_SESSION['t_opancerzenia1'],'badania',true)?></div>
    <div class="ulepsz">
        <?php wypisz($_SESSION['t_opancerzenia1'],'badania')?>
    </div>
    <div class="czas"><?php czas($_SESSION['t_opancerzenia1'],'badania') ?></div>
</div>

<div class="zakladka">
     
        <div class="nazwa">
            Technologia budownictwa
        </div>
        <div class="level">
            <?php echo $_SESSION['t_budownictwa'] ?>
        </div>
    
   
    <div class="zakladka_img">
        <img src="Grafika/ludzie/ulepszenia/up2.png">
    </div>
    <div class="opis">
        Technologia budownictwa pozwala na szybsze budowanie budynków.
    </div>
   <div class="wymagania"><?php oblicz($_SESSION['t_budownictwa'],'badania',true)?></div>
    <div class="ulepsz">
         <?php wypisz($_SESSION['t_budownictwa'],'badania')?>
    </div>
    <div class="czas"><?php czas($_SESSION['t_budownictwa'],'badania') ?></div>
</div>
<?php
	include ('stopka.php');
?>