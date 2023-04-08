<?php

$n = intval(fgets(STDIN)); // number of battles

for ($i = 0; $i < $n; $i++) {
    $B = intval(fgets(STDIN)); // bonus

    // Dabriel
    $x = explode(" ", fgets(STDIN));
    $Ai = intval($x[0]);
    $Di = intval($x[1]);
    $Li = intval($x[2]);

    // Guarte
    $y = explode(" ", fgets(STDIN));
    $Ai2 = intval($y[0]);
    $Di2 = intval($y[1]);
    $Li2 = intval($y[2]);

    //dabriel
    $vg1 = intval(($Ai + $Di) / 2);
    //guarte
    $vg2 = intval(($Ai2 + $Di2) / 2);

    if ($Li % 2 === 0) {
        $vg1 += $B;
    }
    if ($Li2 % 2 === 0) {
        $vg2 += $B;
    }

   echo ($vg1 > $vg2 ? "Dabriel" : ($vg1 < $vg2 ? "Guarte" : "Empate")) . PHP_EOL;
}
