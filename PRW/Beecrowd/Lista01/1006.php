<?php

$A = readline();
$B = readline();
$C = readline();

$media = (($A * 2)+($B * 3) + ($C * 5))/10;

$media = number_format($media, "1", ".", "");

echo "MEDIA = $media\n";

?>
