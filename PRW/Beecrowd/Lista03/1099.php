<?php

$numeroDeTestes = intval(fgets(STDIN));

for ($i = 0; $i < $numeroDeTestes; $i++) { 
    $linha = explode(" ", fgets(STDIN));
    $x = intval($linha[0]);
    $y = intval($linha[1]);
    $soma = 0;

    if ($x > $y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }

    for ($j = $x + 1; $j < $y; $j++) {
        if ($j % 2 != 0) {
            $soma += $j;
        }
    }

    echo $soma . "\n";
}

?>
