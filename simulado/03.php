<?php 

    $n = readline();
  

    for($i = 0; $i<$n; $i++){
        $nome = readline();

        $entrada = readline();
        $val = explode(" ", $entrada);
        $S += floatval($val[0]);
        $B += floatval($val[1]);
        $A += floatval($val[2]);

        $entrada =  readline();
        $val = explode(" ", $entrada);
        $S1 += floatval($val[0]);
        $B1 += floatval($val[1]);
        $A1 += floatval($val[2]);
        
    }
    
    echo "Pontos de Saque: " . number_format((($S1/$S)*100), 2, '.', '')  . " %." . PHP_EOL;
    echo "Pontos de Bloqueio: " . number_format((($B1/$B)*100), 2 ,'.', '') . " %." . PHP_EOL;
    echo "Pontos de Ataque: " . number_format((($A1/$A)*100), 2, '.', '') . " %." . PHP_EOL;
