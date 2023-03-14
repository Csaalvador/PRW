<?php


$A = readline();

if($A<0 || $A>100.0)

echo ("Fora de intervalo\n");

else if($A<=25.0)

echo ("Intervalo [0,25]\n");

else if($A<=50.0)

echo ("Intervalo (25,50]\n");
else if($A<=75.0)

echo ("Intervalo (50,75])\n");

else if($A<=100.0)

echo ("Intervalo (75,100]\n");


?>
