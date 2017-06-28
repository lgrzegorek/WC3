<?php 
function oblicz($lvl,$budynek,$a){
    $pow=pow(1.5,$lvl);
    switch ($budynek){
        case 'castle': $zloto=500; $drewno=500; break;
        case 'barrack': $zloto=300; $drewno=350; break;
        case 'altar': $zloto=300; $drewno=150; break;
        case 'forge': $zloto=300; $drewno=300; break;
        case 'house': $zloto=250; $drewno=300; break;
    }
    $zloto=$zloto*$pow;
    $drewno=$drewno*$pow;
    if ($a){
        echo "Złoto: ".$zloto."<br> Drewno: ".$drewno;
    }
    $zasob['a']=$zloto;
    $zasob['b']=$drewno;
    return $zasob;    
}

function czas($lvl, $budynek){
    $pow=pow(1.5,$lvl);
    
    switch($budynek){
        case 'castle': $minuty=(int)($pow*60); break;
        case 'barrack': $minuty=(int)($pow*50);break;
        case 'altar': $minuty=(int)($pow*40);break;
        case 'forge': $minuty=(int)($pow*50);break;
        case 'house': $minuty=(int)($pow*40);break;
    }
    
    $godziny=$minuty/60;
    $godziny=floor($godziny);
    $minuty=$minuty%60;

    if ($godziny==0){ 
        echo $minuty."min.";
    }
    if ($minuty==0){ 
        echo $godziny."godź.";
    }
    else{ 
        echo $godziny."godź. <br>".$minuty."min.";
    }  
    
}

function wypisz($lvl,$budynek){
    $zasoby=oblicz($lvl,$budynek,false);  
    
    $zloto=$zasoby['a'];
    $drewno=$zasoby['b'];
    if($_SESSION['drewno']>=$drewno && $_SESSION['zloto']>=$zloto){
        echo  '<button type="button" class="btn btn-success">Ulepsz</button>';
    }
    else{
        echo  '<button type="button" class="btn btn-danger">Brak zasobów</button>';
    }
}





?>
