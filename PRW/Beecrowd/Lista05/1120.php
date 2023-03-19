<?php

//revisa de contrato

while (true) { // loop infinito para receber vários casos de teste

    $x = explode(" ", fgets(STDIN));
    $D = $x[0];
    $N = trim($x[1]); // removendo os espaços em branco antes e depois da sequência N

    //se D e N forem iguais a 0, o programa deve ser encerrado
    if ($D == 0 && $N == 0) {
        break; // sai do loop infinito
    }

    // remove o dígito falho da sequência
    $N = str_replace($D, "", $N);

    // remove os zeros à esquerda da sequência
    $N = ltrim($N, '0');

    // se a sequência ficou vazia, significa que todos os dígitos eram o dígito falho  ou que a sequência era composta apenas de zeros
    if ($N == "") {
        $N = 0;
    }

    echo $N . PHP_EOL;
}