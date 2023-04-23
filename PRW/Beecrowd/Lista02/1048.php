<?php

$salario = floatval(readline());
$reajuste = 0;

if ($salario >= 0 && $salario <= 400.00) {
    $reajuste = 15;
} elseif ($salario >= 400.01 && $salario <= 800.00) {
    $reajuste = 12;
} elseif ($salario >= 800.01 && $salario <= 1200.00) {
    $reajuste = 10;
} elseif ($salario >= 1200.01 && $salario <= 2000.00) {
    $reajuste = 7;
} elseif ($salario > 2000.00) {
    $reajuste = 4;
}

$novo_salario = $salario * (1 + $reajuste / 100);
$reajuste_ganho = $salario * $reajuste / 100;

$novo_salario = number_format($novo_salario, 2, '.', '');
$reajuste_ganho = number_format($reajuste_ganho, 2, '.', '');

echo ("Novo salario: $novo_salario\n");
echo ("Reajuste ganho: $reajuste_ganho\n");
echo ("Em percentual: $reajuste %\n");

?>