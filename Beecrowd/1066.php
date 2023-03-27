<?php

//Pares, Ímpares, Positivos e Negativos

$A = (int) fgets(STDIN);
$B = (int) fgets(STDIN);
$C = (int) fgets(STDIN);
$D = (int) fgets(STDIN);
$E = (int) fgets(STDIN);

$par = 0;
$impar = 0;
$positivo = 0;
$negativo = 0;

if ($A % 2 == 0) {
    $par++;
} else {
    $impar++;
}

if ($B % 2 == 0) {
    $par++;
} else {
    $impar++;
}

if ($C % 2 == 0) {
    $par++;
} else {
    $impar++;
}

if ($D % 2 == 0) {
    $par++;
} else {
    $impar++;
}

if ($E % 2 == 0) {
    $par++;
} else {
    $impar++;
}

if ($A > 0) {
    $positivo++;
} elseif ($A < 0) {
    $negativo++;
}

if ($B > 0) {
    $positivo++;
} elseif ($B < 0) {
    $negativo++;
}

if ($C > 0) {
    $positivo++;
} elseif ($C < 0) {
    $negativo++;
}

if ($D > 0) {
    $positivo++;
} elseif ($D < 0) {
    $negativo++;
}

if ($E > 0) {
    $positivo++;
} elseif ($E < 0) {
    $negativo++;
}

echo "$par valor(es) par(es)". PHP_EOL;
echo "$impar valor(es) impar(es)". PHP_EOL;
echo "$positivo valor(es) positivo(s)". PHP_EOL;
echo "$negativo valor(es) negativo(s)". PHP_EOL;

?>