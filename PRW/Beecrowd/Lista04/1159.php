<?php

//Soma de Pares Consecutivos
//URI Online Judge | 1159

$X = readline();

while ($X != 0) {
    $soma = 0;
    if ($X % 2 == 0) {
        for ($i = 0; $i < 5; $i++) {
            $soma += $X;
            $X += 2;
        }
    } else {
        $X++;
        for ($i = 0; $i < 5; $i++) {
            $soma += $X;
            $X += 2;
        }
    }
    echo $soma . PHP_EOL;
    $X = readline();
}



?>