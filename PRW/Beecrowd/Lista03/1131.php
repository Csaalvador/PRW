<?php

$grenais = 0; 
$vitoriasInter = 0; 
$vitoriasGremio = 0;
$empates = 0;

do { 
    list($golsInter, $golsGremio) = explode(" ", readline()); 

    $grenais++; 
    if ($golsInter > $golsGremio) {
        $vitoriasInter++;
    } elseif ($golsGremio > $golsInter) {
        $vitoriasGremio++;
    } else {
        $empates++;
    }

    echo "Novo grenal (1-sim 2-nao)" . PHP_EOL;   //
    $opcao = intval(readline()); 
} while ($opcao == 1);

echo $grenais . " grenais" . PHP_EOL; 
echo "Inter:" . $vitoriasInter . PHP_EOL;
echo "Gremio:" . $vitoriasGremio . PHP_EOL;
echo "Empates:" . $empates . PHP_EOL;

if ($vitoriasInter > $vitoriasGremio) {
    echo "Inter venceu mais" . PHP_EOL;
} elseif ($vitoriasGremio > $vitoriasInter) {
    echo "Gremio venceu mais" . PHP_EOL;
} else {
    echo "Nao houve vencedor" . PHP_EOL;
}

?>
