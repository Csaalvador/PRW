<?php

$tempo = readline();
$velMedia = readline();
$mediaL = 12;

$distancia = ($velMedia / $mediaL) * $tempo;

$distancia = number_format($distancia, 3, ".","");

echo("$distancia\n");


?>
