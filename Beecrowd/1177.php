<?php

$n = intval(readline());
$aux = 0;
$x = array();

for ($i = 0; $i < 1000; $i++) {
$x[$i] = $aux;
$aux++;

if ($aux >= $n) {
    $aux = 0;
}
}

for ($i = 0; $i < 1000; $i++) {
echo "N[$i] = {$x[$i]}\n";
}