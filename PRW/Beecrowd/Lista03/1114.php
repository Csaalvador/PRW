<?php


$senhaCorreta = 2002;


while (true) {

    $senhaInformada = intval(readline());
    
    if ($senhaInformada == $senhaCorreta) {
        echo "Acesso Permitido\n";
        break;
    } else {
        echo "Senha Invalida\n";
    }
}

?>
