<?php

$l = fgets(STDIN);
$c = fgets(STDIN);

echo(($l + $c) % 2 == 0 ? "1" : "0");