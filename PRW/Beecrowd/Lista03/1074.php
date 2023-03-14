<?php


$entrada = fgets(STDIN);
$entrada = explode(" ", $entrada);

$valor1 = $entrada[0];
$valor2 = $entrada[1];

if($valor1 % 2 == 0 && $valor2 % 2 == 0){
    echo "0

";
}
else if($valor1 % 2 != 0 && $valor2 % 2 != 0){
    echo "0

";
}
else{
    echo "1

";
}

?>