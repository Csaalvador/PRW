<?php

$n = intval(trim(fgets(STDIN)));
$array = array_map('intval', explode(' ', trim(fgets(STDIN))));

echo "Menor valor: " . min($array) . PHP_EOL;
echo "Posicao: " . array_search(min($array), $array) . PHP_EOL;

?>
