<?php

$X = intval(fgets(STDIN));

while ($X != 0) {
    $texto = array();
    for ($i = 0; $i < $X; $i++) {
        $texto[$i] = fgets(STDIN);
        $texto[$i] = trim($texto[$i]);
        $texto[$i] = preg_replace('/\s+/', ' ', $texto[$i]);
    }

    $maior = 0;
    for ($i = 0; $i < $X; $i++) {
        $texto[$i] = strrev($texto[$i]);
        $len = strlen($texto[$i]);
        if ($len > $maior) {
            $maior = $len;
        }
    }

    echo "\n";

    for ($i = 0; $i < $X; $i++) {
        $texto[$i] = strrev($texto[$i]);
        $len = strlen($texto[$i]);
        $ptr = &$texto[$i];
        while ($len < $maior) {
            $ptr = ' ' . $ptr;
            $len++;
        }
        echo $ptr . PHP_EOL;
    }

    $X = intval(fgets(STDIN));
}

?>