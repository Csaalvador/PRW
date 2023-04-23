<?php
//Escreva um algoritmo para calcular e escrever o valor de S, sendo S dado pela fórmula: S = 1 + 1/2 + 1/3 + … + 1/100

$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    $soma += 1 / $i;
}

$soma = number_format($soma, 2, '.', '');
echo $soma;
?>