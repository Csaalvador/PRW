<?php
$vetor = explode(" ", fgets(STDIN));
$vetor = array();
$n = readline();

//colocando n no primeiro indice do vetor
$vetor[0] = $n;

//colocando os valores no vetor
for($i = 1; $i < $n; $i++){
    $vetor[$i] = $vetor[$i-1] * 2;
}

//imprimindo o vetor
for($i = 0; $i < 10; $i++){
    echo "N[".$i."] = ".$vetor[$i]. PHP_EOL;
}
