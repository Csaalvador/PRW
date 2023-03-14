<?php

$A = readline();
$B = readline();

$media = (($A * 3.5)+($B * 7.5))/11;

$media = number_format($media, 5, ".", "");

echo "MEDIA = $media\n";

?>
