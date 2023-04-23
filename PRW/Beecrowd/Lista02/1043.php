<?php

$valor = explode(' ', fgets(STDIN));

$A = $valor[0];
$B = $valor[1];
$C = $valor[2];

if ($A < $B + $C && $B < $A + $C && $C < $A + $B) {
    $perimetro = $A + $B + $C;
    echo "Perimetro = $perimetro\n";
} else {
    $area = (($A + $B) * $C) / 2;
    echo "Area = $area\n";
}
?>
