<?php

while ($senha = trim(readline())) { 
    // Verifica se a senha contém letras maiúsculas, minúsculas e números
    if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', $senha)) {

        // Verifica se a senha contém apenas letras e números
        if (preg_match('/^[a-zA-Z0-9]*$/', $senha)) { 

            // Verifica se a senha tem entre 6 e 32 caracteres
            if (strlen($senha) >= 6 && strlen($senha) <= 32) {

                echo "Senha valida.\n";

            } else {
                echo "Senha invalida.\n";
            }
        } else {
            echo "Senha invalida.\n";
        }
    } else {
        echo "Senha invalida.\n";
    }
}

?>