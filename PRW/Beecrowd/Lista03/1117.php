<?php

$notas = [];
$count = 0;

while ($count < 2) {
    $nota = (float) readline();
    if ($nota < 0 || $nota > 10) {
        echo "nota invalida\n";
    } else {
        $notas[] = $nota;
        $count++;
    }
}

$media = array_sum($notas) / 2;

echo "media = " . number_format($media, 2) . "\n";
