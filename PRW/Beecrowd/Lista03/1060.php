<?php


$cont = 0;
$positivos = 0;

while ($cont < 6) {
    $numero = (float) fgets(STDIN);
    if ($numero > 0) {
        $positivos++;
    }
    $cont++;
}

echo $positivos . " valores positivos\n";

?>