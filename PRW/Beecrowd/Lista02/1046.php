<?php

$entrada = fgets(STDIN);
$entrada = explode(" ", $entrada);
$entrada[0] = (int) $entrada[0];
$entrada[1] = (int) $entrada[1];


if ($entrada[0] >= $entrada[1]) {
    $tempo = 24 - $entrada[0] + $entrada[1];
    echo "O JOGO DUROU $tempo HORA(S)\n";
} else {
    $tempo = $entrada[1] - $entrada[0];
    echo "O JOGO DUROU $tempo HORA(S)\n";
}

?>