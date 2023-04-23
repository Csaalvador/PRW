<?php

$velmedia = floatval(fgets(STDIN)); 
$viagem = floatval(fgets(STDIN));
$cons = floatval(fgets(STDIN));

$h = $viagem / $velmedia;
$tc = $viagem / $cons;

$h = number_format($h, 2, ".", "");
$tc = number_format($h, 2, ".", "");

echo ("Total horas: $h" . PHP_EOL);
echo("Total combustivel: $tc" .PHP_EOL);
