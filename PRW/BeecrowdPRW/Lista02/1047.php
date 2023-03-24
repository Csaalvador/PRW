<?php

$x = explode(" ", readline());
$hi = intval($x[0]);
$mi = intval($x[1]);
$hf = intval($x[2]);
$mf = intval($x[3]);

if ($hi < $hf) {
    $h = $hf - $hi;
    if ($mi < $mf) {
        $m = $mf - $mi;
    }
    if ($mi > $mf) {
        $h = $h - 1;
        $m = (60 - $mi) + $mf;
    }
    if ($mi == $mf) {
        $m = 0;
    }
}
if ($hi > $hf) {
    $h = (24 - $hi) + $hf;
    if ($mi < $mf) {
        $m = $mf - $mi;
    }
    if ($mi > $mf) {
        $h = $h - 1;
        $m = (60 - $mi) + $mf;
    }
    if ($mi == $mf) {
        $m = 0;
    }
}
if ($hi == $hf) {
    if ($mi < $mf) {
        $m = $mf - $mi;
        $h = 0;
    }
    if ($mi > $mf) {
        $m = (60 - $mi) + $mf;
        $h = 23;
    }
    if ($mi == $mf) {
        $h = 24;
        $m = 0;
    }
}

printf("O JOGO DUROU %d HORA(S) E %d MINUTO(S)\n", $h, $m);
?>