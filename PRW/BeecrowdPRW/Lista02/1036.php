<?php

$x = readline();
$x = explode(' ', $x);
$a = (float)$x[0];
$b = (float)$x[1];  
$c = (float)$x[2];



$delta = $b * $b - 4 * $a * $c;

if($a != 0 && $delta > -1){
    $R1 = (- $b + sqrt($delta))/(2 * $a);
    $R2 = (- $b - sqrt($delta))/(2 * $a);
    
    $R1 = number_format($R1, 5, ".","");
    $R2 = number_format($R2, 5, ".","");


    echo("R1 = $R1\n");
    echo("R2 = $R2\n");
    
}
else
    echo("Impossivel calcular\n");

?>
