<?php

$N = intval(fgets(STDIN));

for ($i = 1; $i <= $N; $i++) {
    printf("%d %d %d\n", $i, $i * $i, $i * $i * $i);
}

?>
