<?php

//Escreva um algoritmo para calcular e escrever o valor de S, sendo S dado pela fórmula: S = 1 + 3/2 + 5/4 + 7/8 + ... + 39/?

$S = 0;
$denominador = 1;

for ($i = 1; $i <= 39; $i += 2) {
    $S += $i / $denominador;
    $denominador *= 2;
}

$S = number_format($S, 2, '.', '');

echo "$S" . PHP_EOL;

?>