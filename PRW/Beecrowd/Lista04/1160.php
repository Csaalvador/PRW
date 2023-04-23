<?php
// Crescimento Populacional

//EXERCÍCIO COMPLICADO, TIVE DIFICULDADE EM ENTENDER O ENUNCIADO

$T = intval(fgets(STDIN));

for ($i = 0; $i < $T; $i++) {
    $linha = explode(" ", fgets(STDIN));
    $PA = intval($linha[0]);
    $PB = intval($linha[1]);
    $G1 = floatval($linha[2]);
    $G2 = floatval($linha[3]);
    $anos = 0;
    while ($PA <= $PB) {
        $PA += intval($PA * ($G1 / 100));
        $PB += intval($PB * ($G2 / 100));
        $anos++;
        if ($anos > 100) {
            break;
        }
    }
    if ($anos > 100) {
        echo "Mais de 1 seculo." . PHP_EOL;
    } else {
        echo $anos . " anos." . PHP_EOL;
    }
}