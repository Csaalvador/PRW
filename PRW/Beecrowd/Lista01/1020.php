<?php

$dias = readline();

$ano = floor($dias/365);
$mes = floor(($dias % 365) / 30);
$dia = floor($dias % 365)%30;



echo floor($ano);
echo(" ano(s)\n");

echo floor($mes);
echo(" mes(es)\n");

echo floor($dia);
echo(" dia(s)\n");



?>
