<?php

//Troca de vetor 

$vetor = array();

for ($i = 0; $i < 20; $i++) {
    $vetor[$i] = readline();
}

//Trocando os valores do vetor 1 com o vetor 20, 2 com 19, 3 com 18, etc...

for ($i = 0; $i < 10; $i++) {
    $aux = $vetor[$i];
    $vetor[$i] = $vetor[19 - $i];
    $vetor[19 - $i] = $aux;
}

//Imprimindo o vetor

for ($i = 0; $i < 20; $i++) {
    $t = "N[" . $i . "]";
    echo $t . " = " . $vetor[$i] . PHP_EOL;
}