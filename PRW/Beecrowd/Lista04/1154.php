<?php

//ler um número indeterminado de dados, contendo cada um, a idade de um indivíduo e encerrar com numero negativo. Calcular e escrever a idade média desse grupo de indivíduos.

$idade = 0;
$soma = 0;
$cont = 0;

while ($idade >= 0) {
    $idade = readline();
    if ($idade >= 0) {
        $soma += $idade;
        $cont++;
    }
}

$media = $soma / $cont;

echo "$media\n";

?>