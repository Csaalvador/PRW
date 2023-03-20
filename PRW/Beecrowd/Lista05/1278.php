<?php

// Justificador de texto

// Após ler um texto, reimprima esse texto com apenas um espaço entre as palavras e suas linhas justificadas à direita em todo o texto.

// Entrada contém diversos casos de teste

$n = (int) fgets(STDIN);

for ($i = 0; $i < $n; $i++) {
    $texto = fgets(STDIN);

    // Remove espaços extras entre as palavras
    $texto = preg_replace('/\s+/', ' ', trim($texto));

    $linhas = explode("\n", wordwrap($texto, 51));
    $justificado = "";
    foreach ($linhas as $linha) {
        // Justifica a linha à esquerda
        $justificado .= str_pad($linha, 51, " ", STR_PAD_LEFT) . "\n";
    }

    echo rtrim($justificado) . "\n";
}

?>