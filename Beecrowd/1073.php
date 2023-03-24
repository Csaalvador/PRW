<?php

//apresentar o quadrado de numeros pares de 1 até n

$n = fgets(STDIN);

for ($i = 1; $i <= $n; $i++) {

    if ($i % 2 == 0) { //se o resto da divisão por 2 for igual a 0, então é par

        $out = pow($i, 2); //eleva o numero ao quadrado
        echo "$i^2 = $out" . PHP_EOL;

    }
}