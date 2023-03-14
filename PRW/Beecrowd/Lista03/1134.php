<?php
    $alcool = 0;
    $gasolina = 0;
    $diesel = 0;

    do {
        $codigo = intval(fgets(STDIN)); // 1, 2, 3, 4

        if ($codigo == 1) { 
            $alcool++;
        } elseif ($codigo == 2) {
            $gasolina++;
        } elseif ($codigo == 3) {
            $diesel++;
        }
    } while ($codigo != 4);

    echo "MUITO OBRIGADO\n"; 
    echo "Alcool: $alcool\n";
    echo "Gasolina: $gasolina\n";
    echo "Diesel: $diesel\n";
?>
