<?php

$x = readline();
$x = explode(' ', $x);
$A = (int)$x[0];
$B = (int)$x[1];  
$C = (int)$x[2];
$D = (int)$x[3];

if($B > $C && $D > $A && ($C + $D) > ($A + $B) && $C > 0 && $D >> 0 && $A % 2 == 0) {
    echo ("Valores aceitos\n");
}else{
    echo("Valores nao aceitos\n");
}

?>
