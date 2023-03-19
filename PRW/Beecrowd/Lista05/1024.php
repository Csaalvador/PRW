<?php
//Criptografia


////////////////////////////////ERRADO///////////////////////////////


$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    $string = trim(fgets(STDIN));
    $length = strlen($string);

    // Na primeira passada, desloca os caracteres 3 posições para a direita
    $output = '';
    for ($j = 0; $j < $length; $j++) {
        $char = $string[$j];
        if (ctype_alpha($char)) {
            $output .= chr((ord($char) - ($char >= 'a' ? 97 : 65) + 3) % 26 + ($char >= 'a' ? 97 : 65));
        } else {
            $output .= $char;
        }
    }

    // Saída da primeira passada
    

    echo $output . PHP_EOL;
    // Saída da primeira passada
    echo strrev($output) . PHP_EOL;

    // Na segunda passada, inverte a string
    $output = strrev($output);

    // Na terceira passada, desloca os caracteres uma posição para a esquerda
    $half = intval($length / 2);
    for ($j = $half; $j < $length; $j++) {
        $char = $output[$j];
        if (ctype_alpha($char)) {
            $output[$j] = chr((ord($char) - ($char >= 'a' ? 97 : 65) - 1 + 26) % 26 + ($char >= 'a' ? 97 : 65));
        }
    }

    // Saída da terceira passada
    echo $output . PHP_EOL;

    // Saída final (adiciona uma linha em branco)
    echo PHP_EOL;
}
?>