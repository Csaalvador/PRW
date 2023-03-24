<?php
$raio = (double)readline();
$pi = 3.14159;
$form =  ((4/3) * $pi) * ($raio*$raio*$raio);


$form = number_format($form, "3", ".", "");

echo "VOLUME = $form\n";


?>
