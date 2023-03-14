<?php

$N = intval(fgets(STDIN));

$count = 1;
for ($i = 0; $i < $N; $i++) {
    printf("%d %d %d PUM\n", $count, $count + 1, $count + 2);
    $count += 4;
}

?>
