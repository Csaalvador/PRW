<?php

$maior = PHP_INT_MIN; // atribui o menor inteiro possível
$posicao = 0;

for ($i = 1; $i <= 100; $i++) {
    $valor = (int) fgets(STDIN);
    if ($valor > $maior) {
        $maior = $valor;
        $posicao = $i;
    }
}

echo $maior . "\n" . $posicao . "\n";