<?php
//intervalo 2
//Leia um valor inteiro N. Este valor será a quantidade de valores inteiros X que serão lidos em seguida.
//Mostre quantos destes valores X estão dentro do intervalo [10,20] e quantos estão fora do intervalo, mostrando essas informações.

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

