<?php


 $tempo = readline();


$hr = floor($tempo / 3600);
$tempo = floor($tempo - ($hr * 3600));

$min = floor($tempo / 60);
$tempo = floor($tempo - ($min * 60));

echo("$hr:$min:$tempo\n");



?>
