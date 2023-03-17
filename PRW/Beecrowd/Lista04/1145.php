<?php
$entrada = readline();
$entrada = explode(" ", $entrada);

$x = $entrada[0];
$y = $entrada[1];

for ($i = 1; $i <= $y; $i++) {
    echo $i;


    if ($i % $x == 0 || $i == $y) {
        echo "\n";
    } else {
        echo " ";
    }
}
?>