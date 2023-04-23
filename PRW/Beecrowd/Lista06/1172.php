<?php
//Substituição em Vetor I

$vetor = array();

for ($i = 0; $i < 10; $i++) {
    $valor = intval(trim(fgets(STDIN)));
    if ($valor <= 0) {
        $valor = 1;
    }
    $vetor[$i] = $valor;
}

//exibição dos valores
for ($i = 0; $i < 10; $i++) {
    echo "X[$i] = " . $vetor[$i] . PHP_EOL;
}
?>
