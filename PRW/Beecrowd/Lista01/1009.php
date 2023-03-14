<?php

$nome = readline();
$salario = readline();
$vendas = readline();

$salario_final = $vendas * 0.15 + $salario;
$salario_final = number_format($salario_final, "2", ".", "");


echo "TOTAL = R$ $salario_final\n";

?>
