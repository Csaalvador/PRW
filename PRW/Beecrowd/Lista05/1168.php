<?php

//LED - 1168

// faça um algoritmo que ajude João a descobrir a quantidade de leds necessário para montar o valor.

$N = (int) fgets(STDIN);

for ($i = 0; $i < $N; $i++) {
    $num = fgets(STDIN);

    //pra cada numero, eu vou contar quantos leds ele tem

    $num = str_split($num);

    $leds = 0;

    foreach ($num as $digito) {
        switch ($digito) {
            case 1:
                $leds += 2;
                break;
            case 2:
                $leds += 5;
                break;
            case 3:
                $leds += 5;
                break;
            case 5:
                $leds += 5;
                break;
            case 4:
                $leds += 4;
                break;
            case 6:
                $leds += 6;
                break;
            case 9:
                $leds += 6;
                break;
            case 0:
                $leds += 6;
                break;
            case 7:
                $leds += 3;
                break;
            case 8:
                $leds += 7;
                break;
        }

        //agora eu tenho a quantidade de leds que esse numero tem
        //vou somar com a quantidade de leds que eu ja tinha
 
        $leds += $leds;
    }

    echo $leds . " leds" . PHP_EOL;

}
   
?>