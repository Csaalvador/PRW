<?php

// lê os valores de X e Y
$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));


// se Y for menor que X, troca os valores
if ($y < $x) { // se Y for menor que X, troca os valores
    $temp = $x; // se Y for menor que X, troca os valores
    $x = $y; // se Y for menor que X, troca os valores
    $y = $temp; // se Y for menor que X, troca os valores
}

// inicializa a variável que irá armazenar a soma
$sum = 0;

// percorre todos os números entre X e Y
for ($i = $x; $i <= $y; $i++) {
    // se o número não for múltiplo de 13, adiciona à soma
    if ($i % 13 != 0) {
        $sum += $i;
    }
}

// imprime a soma
echo $sum . "\n";
