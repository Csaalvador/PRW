<?php


$casos = 0;
$pergunta = 1;

while (($casos = (int) fgets(STDIN))) {
    for ($i = 0; $i < $casos; $i++) {
        $valor = (int) fgets(STDIN);
        echo "resposta $pergunta: $valor\n";
        $pergunta++;
    }
}