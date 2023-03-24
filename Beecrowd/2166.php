<?php

$n = intval(readline());//leia o valor de n

$raiz = 1;
for ($i = 0; $i < $n; $i++) {//repita n vezes
    $raiz = 1 + 1 / ($raiz + 1);//calcule a raiz de 2
}

$raiz = number_format($raiz, 10, ".", "");

echo $raiz . PHP_EOL;

?>
