<?php

//Feliz nataaal

$i = intval(fgets(STDIN));

if ($i > 0) {
    echo "Feliz nat";
    for ($j = 0; $j < $i; $j++) {
        echo "a";
    }
    echo "l!" . PHP_EOL;
}
?>