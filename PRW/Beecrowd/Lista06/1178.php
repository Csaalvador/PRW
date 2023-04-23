<?php

//preenchimento de vetor III

$vetor = array(99);
$vetor[0] = fgets(STDIN);

for($i = 0; $i < 99; $i++){

    $line = "N[$i] =";
    $metade = $vetor[$i]/2;
    $vetor[0] = $vetor[0]/2;


    if($vetor[0] >= 1){

        echo "$line $metade" . number_format($metade, 4, ".","" ). PHP_EOL;

    }else{
            
            echo "$line 0" . PHP_EOL;
    
        }
}