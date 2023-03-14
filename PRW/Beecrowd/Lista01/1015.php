<?php

$x = readline();
$x = explode(' ',$x);

$x1 = (double)$x[0];
$y1 = (double)$x[1];

$y = readline();
$y = explode(' ',$y);

$x2 = (double)$y[0];
$y2 = (double)$y[1];

$dis = sqrt((($x2 - $x1) * ($x2 - $x1)) + (($y2 - $y1) * ($y2 - $y1)) );
$dis = number_format($dis, 4, ".","");


echo "$dis\n";

?>
