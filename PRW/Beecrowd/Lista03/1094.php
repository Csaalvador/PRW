<?php

// Lê o número de casos de teste
$n = intval(fgets(STDIN));

$total = 0;
$totalCoelhos = 0;
$totalRatos = 0;
$totalSapos = 0;

for ($i = 0; $i < $n; $i++) {

    $linha = trim(fgets(STDIN));
    $quantia = intval(explode(" ", $linha)[0]);
    $tipo = explode(" ", $linha)[1];

    $total += $quantia;
    if ($tipo === "C") {
        $totalCoelhos += $quantia;
    } else if ($tipo === "R") {
        $totalRatos += $quantia;
    } else if ($tipo === "S") {
        $totalSapos += $quantia;
    }
}

$percentualCoelhos = ($totalCoelhos / $total) * 100;
$percentualRatos = ($totalRatos / $total) * 100;
$percentualSapos = ($totalSapos / $total) * 100;

// Imprime o resultado com duas casas decimais para os percentuais
echo "Total: " . $total . " cobaias\n";
echo "Total de coelhos: " . $totalCoelhos . "\n";
echo "Total de ratos: " . $totalRatos . "\n";
echo "Total de sapos: " . $totalSapos . "\n";
echo "Percentual de coelhos: " . number_format($percentualCoelhos, 2, ".", "") . " %\n";
echo "Percentual de ratos: " . number_format($percentualRatos, 2, ".", "") . " %\n";
echo "Percentual de sapos: " . number_format($percentualSapos, 2, ".", "") . " %";