<?php

$N = intval(fgets(STDIN)); // Número de linhas

for ($i = 1; $i <= $N; $i++) { // Loop para cada linha
    $a = $i; // Valor de a
    $a2 = $a * $a; // Valor de a²
    $a3 = $a * $a * $a; // Valor de a³
    printf("%d %d %d\n", $a, $a2, $a3); // Imprime a linha
    printf("%d %d %d\n", $a, $a2 + 1, $a3 + 1); // Imprime a linha
}

?>