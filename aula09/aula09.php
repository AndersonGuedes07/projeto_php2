<?php

function soma(){
    $p = func_get_args();
    $tot = func_num_args();
    $s = 0;
    for($i=0; $i < $tot; $i++){
        $s = $s + $p[$i];
    }
    return $s;
}
    

    $r = soma(3, 4, 8, 1, 2);
    echo "A soma é igual $r";

?>