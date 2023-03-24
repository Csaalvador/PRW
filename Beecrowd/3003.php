<?php

while ($palavra = fgets(STDIN)) {
    $tamanho = strlen(trim($palavra));

    if ($tamanho >= 10) {
        echo "palavrao\n";
    } else {
        echo "palavrinha\n";
    }
}