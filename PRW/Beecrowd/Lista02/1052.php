<?php

$mes = intval(fgets(STDIN));

$meses = array(
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December'
);

if ($mes >= 1 && $mes <= 12) {
    echo $meses[$mes] . PHP_EOL;

} else {
    echo 'Invalid month' . PHP_EOL;

    
    
}
?>
