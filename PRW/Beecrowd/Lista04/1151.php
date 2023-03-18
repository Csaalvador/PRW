<?php

$n = intval(fgets(STDIN));

$x = 0;
$y= 1;

if ($n == 1) {
    echo "0\n";
} else if ($n > 1) {
    echo "$x";
    echo " $y";

    for ($i = 2; $i < $n; $i++) {
        $soma = $y+ $x;
        $x = $ant;
        $y= $soma;

        echo " $soma";
    }
}

echo "\n";

?>
