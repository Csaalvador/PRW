<?php

while ($x = (int) fgets(STDIN)) {

    if ($x == 0) {
        break;

    }

    for ($i = 1; $i <= $x; $i++) {
        echo "$i";
        if ($i < $x) {
            echo " ";

        }
    }
    echo ("\n");
}