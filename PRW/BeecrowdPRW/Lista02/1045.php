<?php

$x = explode(' ', readline());
sort($x, SORT_NUMERIC);
$a = $x[2];
$b = $x[1];
$c = $x[0];

if ($a >= ($b + $c)) {
    echo "NAO FORMA TRIANGULO\n";
} else {
    if (($a ** 2) == ($b ** 2 + $c ** 2)) {
        echo "TRIANGULO RETANGULO\n";
    }
    if (($a ** 2) > ($b ** 2 + $c ** 2)) {
        echo "TRIANGULO OBTUSANGULO\n";
    }
    if (($a ** 2) < ($b ** 2 + $c ** 2)) {
        echo "TRIANGULO ACUTANGULO\n";
    }
    if ($a == $b && $b == $c) {
        echo "TRIANGULO EQUILATERO\n";
    }
    if ($a == $b && $b != $c || $b == $c && $c != $a || $a == $c && $c != $b) {
        echo "TRIANGULO ISOSCELES\n";
    }
}