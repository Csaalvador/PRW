<?php
//Substituição em Vetor I

$vetor = array();

for ($i = 0; $i < 10; $i++) {
    $vetor[$i] = readline();
}

for ($i = 0; $i < 10; $i++) {
    if ($vetor[$i] <= 0) {
        $vetor[$i] = 1;
    }
}

//contagem de um até 10
for ($i = 0; $i < 10; $i++) {
    echo "X[$i] = $vetor[$i]" . PHP_EOL;
}


?>