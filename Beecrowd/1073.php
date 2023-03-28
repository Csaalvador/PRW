<?php


$n = intval(readline());    
$vetor = array();

//colocando n no primeiro indice do vetor
$vetor[0] = $n;

//colocando os valores no vetor
for($i = 1; $i < 10; $i++){
    $vetor[$i] = $vetor[$i-1] * 2;
}

//imprimindo o vetor
for($i = 0; $i < 10; $i++){
    echo "N[".$i."] = ".$vetor[$i]. PHP_EOL;
}
