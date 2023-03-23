<?php

//variável n para indicar o numero de casos a seguir
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {

    //NUMERO DE PESSOAS NO GRUPO
    $k = intval(fgets(STDIN));
    $idiomas = array();

    //LOOP PARA PEGAR A QUANTIA DE LINHAS DE IDIOMAS
    for ($j = 0; $j < $k; $j++) {
        $idioma = fgets(STDIN);
        array_push($idiomas, $idioma);
    }

    if (count(array_unique($idiomas)) == 1) { //VAMOS VER OS IDIOMAS REPETIDOS E TIRAR OS REPETIDOS E VER SE SOBROU 1, SE SIM, TODOS FALAM O MESMO IDIOMA
        echo trim($idiomas[0]) . PHP_EOL;
    } else {
        echo "ingles" . PHP_EOL;
    }
}