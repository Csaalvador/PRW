<?php

//Ler um número inteiro N e calcular todos os seus divisores.
$N = intval(fgets(STDIN));

for ($i = 1; $i <= $N; $i++) {
    if ($N % $i == 0) {

        echo $i .PHP_EOL;

    }

}




