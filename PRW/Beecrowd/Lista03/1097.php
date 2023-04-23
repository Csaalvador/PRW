<?php

for ($i = 1, $j = 7; $i <= 9; $i += 2, $j += 2) {
    for ($count = 0; $count < 3; $count++) {
        echo "I=$i J=$j\n";
        $j--;
    }
    $j += 3;
}