<?php

$entrada = explode(" ", fgets(STDIN));

$n = intval($entrada[count($entrada) - 1]); // pega o ultimo valor do array
$a = intval($entrada[0]); // pega o primeiro valor do array

if($n < 0 || $n == 0){
        $n = readline();
    }

$soma = 0;
for($i = 0; $i < $n; $i++){
    $soma += $a + $i; //
}

echo $soma . PHP_EOL;

?>