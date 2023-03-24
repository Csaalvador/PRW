<?php

$qtdp = intval(fgets(STDIN));

//qntdp indica a quantidade de operações que serão realizadas

for ($i = 0; $i < $qtdp; $i++) {
    $x = explode(" ", trim(fgets(STDIN)));
    $produto = $x[0];
    $qntd = $x[1];

    //produto indica o produto que será comprado
    //qntd indica a quantidade do produto que será comprado

    switch($produto){
        case 1001:
            $total = $qntd * 1.50;
            break;
        case 1002:
            $total = $qntd * 2.50;
            break;
        case 1003:
            $total = $qntd * 3.50;
            break;
        case 1004:
            $total = $qntd * 4.50;
            break;
        case 1005:
            $total = $qntd * 5.50;
            break;
    }
    $total = number_format($total, 2, '.', '');
    echo $total . PHP_EOL;
}