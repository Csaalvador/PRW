<?php

$valor = readline();

$troco = $valor;

$cem = floor($troco / 100);

$troco = floor ($troco - ($cem *100));

$cinquenta = floor($troco / 50);

$troco = floor ($troco - ($cinquenta * 50));

$vinte = floor($troco / 20);

$troco = floor($troco - ($vinte * 20));

$dez = floor ($troco /10);

$troco = floor ($troco -($dez * 10));

$cinco = floor ($troco / 5);

$troco = floor ($troco - ($cinco * 5));

$dois = floor ($troco / 2);

$troco = floor ($troco - ($dois * 2));

echo("$valor\n");
 
        echo floor ($cem);
        echo(" nota(s) de R$ 100,00\n");
        
        echo floor ($cinquenta);
        echo(" nota(s) de R$ 50,00\n");
        
        echo floor ($vinte);
        echo(" nota(s) de R$ 20,00\n");
        
        echo floor ($dez);
        echo(" nota(s) de R$ 10,00\n");
        
        echo floor ($cinco);
        echo(" nota(s) de R$ 5,00\n");
        
         echo floor ($dois);
        echo(" nota(s) de R$ 2,00\n");
        
         echo floor ($troco);
        echo(" nota(s) de R$ 1,00\n");


?>
