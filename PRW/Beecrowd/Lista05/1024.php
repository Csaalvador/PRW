<?php

$N = intval(fgets(STDIN));
for ($i = 0; $i < $N; $i++) {
    $M = trim(fgets(STDIN));

    $n = strlen($M);

    for ($j = 0; $j < $n; $j++) {
        if (ctype_alpha($M[$j])) {
            $M[$j] = chr(ord($M[$j]) + 3);
        }
    }

    for ($j = 0; $j < $n / 2; $j++) {
        $aux = $M[$j];
        $M[$j] = $M[$n - 1 - $j];
        $M[$n - 1 - $j] = $aux;
    }

    for ($j = intval($n / 2); $j < $n; $j++) {
        $M[$j] = chr(ord($M[$j]) - 1);
    }

    echo $M . PHP_EOL;
}