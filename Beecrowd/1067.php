<?php
//mostre os numeros impares de 1 a até x;

$x = fgets(STDIN);

for ($i = 1; $i <= $x; $i++) {
    if ($i % 2 != 0) { //se o resto da divisão por 2 for diferente de 0, então é impar
        echo $i . PHP_EOL;
    }
}