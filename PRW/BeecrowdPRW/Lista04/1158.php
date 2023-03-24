<?php
//PRA SER SINCERO, ENTENDI NADA DESSE EXERCÍCIO!
//Soma de Ímpares Consecutivos III

$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    $X = explode(" ", fgets(STDIN));
    $Y = $X[1];
    $X = $X[0];
    $soma = 0;
    $cont = 0;
    while ($cont < $Y) {
        if ($X % 2 != 0) {
            $soma += $X;
            $cont++;
        }
        $X++;
    }
    echo $soma .PHP_EOL;
}

