<?php

//SENTENÇA DANÇANTE

//uma sentença dançante é uma sentença em que as letras são alternadas entre maiúsculas e minúsculas.
//Para tornar a sentença dançante, você deve pegar cada letra da sentença, da primeira letra à última, e transformá-la de acordo com o seguinte critério:


//A entrada contém vários casos de teste
while ($frase = fgets(STDIN)) {
    $frase = trim($frase);
    $frase = str_split($frase);

    echo sentencaDancante($frase) . "\n";
}

function sentencaDancante($frase)
{
    $frase = str_split($frase);
    $fraseDancante = "";
    $i = 0;
    foreach ($frase as $letra) {
        $fraseDancante .= ($i % 2 == 0) ? strtoupper($letra) : strtolower($letra);
        $i++;
    }
    return $fraseDancante;
}

?>