<?php
$entrada = explode(" ", fgets(STDIN));
$a = $entrada[0];
$b = $entrada[1];
$c = $entrada[2];
$maiorAB = ($a + $b + abs($a - $b)) / 2;
$maiorABC = ($maiorAB + $c + abs($maiorAB - $c)) / 2;
echo ("$maiorABC eh o maior\n");


?>
