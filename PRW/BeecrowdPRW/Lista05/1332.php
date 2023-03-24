<?php

//armazenan a quantidade de palavras
$n = readline();

//armazena as palavras
for ($i = 0; $i < $n; $i++) {
    $palavra = readline();
    $palavras[$i] = $palavra;

    //verifica se a palavra tem 3 caracteres
    if (strlen($palavra) == 3) {

        //verifica se a palavra tem as letras certas
        if ($palavra[0] == 'o' && $palavra[2] == 'e' || $palavra[0] == 'o' && $palavra[1] == 'n' || $palavra[1] == 'n' && $palavra[2] == 'e' || $palavra[0] == 'o' && $palavra[1] == 'n' && $palavra[2] == 'e') {
            $palavras[$i] = 1;
        }
        if ($palavra[0] == 't' && $palavra[2] == 'o' || $palavra[0] == 't' && $palavra[1] == 'w' || $palavra[1] == 'w' && $palavra[2] == 'o' || $palavra[0] == 't' && $palavra[1] == 'w' && $palavra[2] == 'o')
            $palavras[$i] = 2;
        echo trim($palavras[$i]) . PHP_EOL;

    } else {
        $palavras[$i] = 3;
        echo trim( $palavras[$i]) . PHP_EOL;

    }
}