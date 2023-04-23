<?php

$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = intval(fgets(STDIN));
$d = intval(fgets(STDIN));
$e = intval(fgets(STDIN));

$count = 0;
if ($a % 2 == 0) {
    $count++;
}
if ($b % 2 == 0) {
    $count++;
}
if ($c % 2 == 0) {
    $count++;
}
if ($d % 2 == 0) {
    $count++;
}
if ($e % 2 == 0) {
    $count++;
}

echo $count . " valores pares\n";