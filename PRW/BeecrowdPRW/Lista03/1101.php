<?php

while (true) {

    $line = readline();
    $values = explode(" ", $line);
    $m = intval($values[0]);
    $n = intval($values[1]);
    
    if ($m <= 0 || $n <= 0) {
        break;
    }
    
    if ($m < $n) {
        $start = $m;
        $end = $n;
    } else {
        $start = $n;
        $end = $m;
    }
    
    $sum = 0;
    for ($i = $start; $i <= $end; $i++) {
        echo $i . " ";
        $sum += $i;
    }
    echo "Sum=" . $sum . "\n";
}

?>
