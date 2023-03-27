<?php

list($a, $b, $c) = explode(' ', readline());
$a = intval($a);
$b = intval($b);
$c = intval($c);
if(($a-$b == 0) || ($a-$c == 0) || ($b-$c == 0)){
    echo 'S'.PHP_EOL;
} else {
    if(($a+$b-$c == 0) || ($b-$a+$c == 0) || ($c-$a+$b == 0)){
        echo 'S'.PHP_EOL;
    } elseif(($a-$b-$c == 0) || ($b-$a-$c == 0) || ($c-$a-$b == 0)){
        echo 'S'.PHP_EOL;
    } else {
        echo 'N' .PHP_EOL;
    }
}
?>
