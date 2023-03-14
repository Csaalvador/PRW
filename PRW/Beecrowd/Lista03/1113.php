<?php

while (true) {

    $entrada = readline();
    $values = explode(" ", $entrada);
    $x = intval($values[0]);
    $y = intval($values[1]);

    if ($x == $y) {
        break;
    }

    if ($x < $y) {
        echo "Crescente\n";
    } else {
        echo "Decrescente\n";
    }
}

?>