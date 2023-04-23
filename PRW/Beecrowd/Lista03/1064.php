<?php

$valores = [];
for ($i = 0; $i < 6; $i++) {
    $valores[] = floatval(fgets(STDIN));
}

$positivos = 0;
$somaPositivos = 0;
foreach ($valores as $valor) {
    if ($valor > 0) {
        $positivos++;
        $somaPositivos += $valor;
    }
}
$mediaPositivos = $somaPositivos / $positivos;

echo $positivos . " valores positivos\n";
echo number_format($mediaPositivos, 1, '.', '') . "\n";

?>