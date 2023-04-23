<?php

for ($i = 0; $i <= 20; $i += 2) {
    $x = $i / 10.0;
    for ($j = 1; $j <= 3; $j++) {
        if ($x == 0 || $x == 1 || $x == 2) {
            $t = $j+$x;
            echo "I={$x} J=$t" . PHP_EOL;
        } else {
            echo "I={$x} J=" . ($j+$x) . PHP_EOL;
        }
    }
}
