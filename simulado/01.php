<?php

$n = fgets(STDIN);
for ($i = 0; $i < $n; $i++) {

    $entrada = explode(" ", trim(fgets(STDIN)));
    $a = $entrada[0];
    $b = $entrada[1];


    if (strpos($a, "$b") !== false) {
        echo "encaixa\n";
    } else {
        echo "nao encaixa\n";
    }
}
