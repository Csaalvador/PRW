<?php
//intervalo 2

$N = intval(readline());
$in = 0;
$out = 0;

for ($i = 0; $i < $N; $i++) {
    $X = intval(readline());
    if ($X >= 10 && $X <= 20) {
        $in++;
    } else {
        $out++;
    }
}

echo $in . " in" . PHP_EOL;
echo $out . " out" . PHP_EOL;

