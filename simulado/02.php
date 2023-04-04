<?php

$l = fgets(STDIN);
$c = fgets(STDIN);

$soma = $l + $c;

if ($soma % 2 == 0) {
    echo "1\n";
} else {
    echo "0\n";
}
