<?php

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

if ($x > $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

for ($i = $x + 1; $i < $y; $i++) {
    $resto = $i % 5;
    if ($resto == 2 || $resto == 3) {
        echo $i . "\n";
    }
}
