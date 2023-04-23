<?php

$x = readline();
$x = explode(' ',$x);

$A = (double)$x[0];
$B = (double)$x[1];
$C = (double)$x[2];

$tri = ($A * $C)/2;
$tri = number_format($tri, 3, ".","");

$cir = (($C * $C) * 3.14159);
$cir = number_format($cir, 3, ".","");

$tra = (($A + $B) * $C )/2;
$tra = number_format($tra, 3, ".","");

$qua = $B * $B;
$qua = number_format($qua, 3, ".","");

$ret = $A * $B;
$ret = number_format($ret, 3, ".","");

echo "TRIANGULO: $tri\n";
echo "CIRCULO: $cir\n";
echo "TRAPEZIO: $tra\n";
echo "QUADRADO: $qua\n";
echo "RETANGULO: $ret\n";

?>
