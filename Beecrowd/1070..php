<?php
//Leia um valor inteiro X. Em seguida apresente os 6 valores ímpares consecutivos a partir de X, um valor por linha, inclusive o X ser for o caso.

$x = fgets(STDIN);

for ($i = $x; $i < ($x + 12); $i++) {
    if ($i % 2 != 0) {
        echo $i . PHP_EOL;
    }
}