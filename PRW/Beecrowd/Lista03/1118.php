<?php 

do { // lê as notas e calcula a média
    $nota1 = floatval(fgets(STDIN)); // lê a primeira nota
    while ($nota1 < 0 || $nota1 > 10) { // verifica se a nota é válida
        echo "nota invalida\n"; // exibe a mensagem de erro
        $nota1 = floatval(fgets(STDIN)); // lê novamente a primeira nota
    }

    $nota2 = floatval(fgets(STDIN)); // lê a segunda nota
    while ($nota2 < 0 || $nota2 > 10) { // verifica se a nota é válida
        echo "nota invalida\n"; // exibe a mensagem de erro
        $nota2 = floatval(fgets(STDIN)); // lê novamente a segunda nota
    }

    $media = number_format(($nota1 + $nota2) / 2, 2, '.', ''); // calcula a média      
    echo "media = $media\n"; // exibe a média

    do { // lê a opção do usuário
        echo "novo calculo (1-sim 2-nao)\n"; // exibe as opções
        $opcao = intval(fgets(STDIN));  // lê a opção
    } while ($opcao != 1 && $opcao != 2);  // verifica se a opção é válida

} while ($opcao != 2);  // verifica se o usuário quer continuar