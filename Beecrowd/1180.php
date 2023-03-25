<?php

$vetor = array();
for ($i = 0; $i < 10; $i++) {
    $vetor[$i] = (int) fgets(STDIN);
}

$min = min($vetor);
$position = array_search($min, $vetor);

echo"Menor valor: $min.PHP_EOL";
echo"Posicao: $position.PHP_EOL";