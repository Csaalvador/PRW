<?php

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {

    list($a, $b, $c) = fscanf(STDIN, "%f %f %f");

    $media = ($a * 2 + $b * 3 + $c * 5) / 10;

    echo number_format($media, 1, '.', '') . "\n";
}