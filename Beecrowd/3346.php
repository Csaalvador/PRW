<?php
$f1 = floatval(fgets(STDIN));
$f2 = floatval(fgets(STDIN));
$flutuacao_total = ($f2 - $f1) / $f1 * 100;
printf("%.6f\n", $flutuacao_total);
?>