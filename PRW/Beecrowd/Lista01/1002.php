<?php
$pi = 3.14159;
$raio = readline();

$area = $pi * ($raio * $raio);
$area = number_format($area, 4, ".", "");
echo "A=$area\n";

?>
