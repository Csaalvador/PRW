<?php
//Leia 2 valores inteiros X e Y. A seguir, calcule e mostre a soma dos números impares entre eles.

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

$soma = 0;

if ($x > $y) {
    $aux = $x;
    $x = $y;
    $y = $aux;
}

for ($i = $x + 1; $i < $y; $i++) {
    if ($i % 2 != 0) {
        $soma += $i;
    }
}

echo $soma . PHP_EOL;

