<?php

$X = intval(fgets(STDIN));
$Z = intval(fgets(STDIN));


// Se X for maior que Z ou igual a Z, o programa pede um novo valor para Z
if($X >= $Z){
        while($X >= $Z){
                $Z = intval(fgets(STDIN));
        }
}

//soma de X para passar de Z
$soma = 0;
//contador de X
$cont = 0;

while($soma < $Z){
        $soma += $X;
        $X++;
        $cont++;
}

echo $cont . "

";


?>
