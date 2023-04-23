<?php

$n = intval(fgets(STDIN));

for ($i = 1; $i <= 10; $i++) {

    $result = $i * $n;
    echo "$i x $n = $result\n";
}

?>