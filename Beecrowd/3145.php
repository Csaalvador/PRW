<?php

//uma jornada inesperada

$e = fgets(STDIN);
$e = explode(" ", $e);

$n = $e[0];
$x = $e[1];

trim($out = $x / ($n + 2) );
$out = number_format($out, 2, ".", "");

echo $out . PHP_EOL;