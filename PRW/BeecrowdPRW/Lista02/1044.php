<?php


$x = readline();
$x = explode(' ',$x);

$a = (int)$x[0];
$b = (int)$x[1];



if($a % $b == 0 || $b % $a == 0) {
    echo ("Sao Multiplos\n");
} else {
    echo ("Nao sao Multiplos\n");
}

?>
