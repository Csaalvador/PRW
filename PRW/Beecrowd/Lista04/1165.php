<?php

//NUMERO PRIMOS

$n = intval(fgets(STDIN));

for($i = 0; $i < $n; $i++){
    $num = intval(fgets(STDIN));
    $cont = 0;
    for($j = 1; $j <= $num; $j++){
        if($num % $j == 0){
            $cont++;
        }
    }
    if($cont == 2){
        echo "eh primo" . PHP_EOL;
    }else{
        echo "nao eh primo" . PHP_EOL;
    }
}

?>

