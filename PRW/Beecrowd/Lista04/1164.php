<?php

//Numero perfeito

$x = intval(fgets(STDIN));

for ($i = 0; $i < $x; $i++) {
    $n = intval(fgets(STDIN));
    $soma = 0;
    for ($j = 1; $j < $n; $j++) {
        if ($n % $j == 0) {
            $soma += $j;
        }
    }
    if ($soma == $n) {
        echo $n . " eh perfeito

";

    } else {
        echo $n . " nao eh perfeito

";
    }
}   

?>