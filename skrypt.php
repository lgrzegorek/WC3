<?php 
function oblicz($lvl, $zloto_lvl1, $drewno_lvl1){
    if($lvl==0){
        echo "Złoto: $zloto_lvl1 <br> Drewno: $drewno_lvl1";
    }
    else
    {   
        $gold=(int)pow(1.5,$lvl)*$zloto_lvl1;
        $wood=(int)pow(1.5,$lvl)*$drewno_lvl1;
        echo "Złoto: $gold <br> Drewno: $wood";
    }
}

function wypisz(){
        
    if($_SESSION['drewno']>=100 && $_SESSION['zloto']>=100){
        echo  '<button type="button" class="btn btn-success">Ulepsz</button>';
    }
    else{
        echo  '<button type="button" class="btn btn-danger">Ulepsz</button>';
    }
}





?>