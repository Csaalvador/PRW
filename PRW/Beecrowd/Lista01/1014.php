<?php

$km = readline();
$litro = (real) readline();

$litro = number_format($litro, 1, ".","");

$media = ($km / $litro);

$media = number_format($media, 3, ".", "");

echo("$media km/l\n");


?>
