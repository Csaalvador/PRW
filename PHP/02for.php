<?php



//COMO FUNCIONA O LOOP FOR

//for (inicialização; condição; incremento) {
//    código a ser executado
//}

for ($i = 0; $i < 10; $i++) {
    echo $i;
}



//EXTRUTURA SIMPLES DO COMANDO FOR, CONTAGEM DE 1 ATÉ N, VALOR INSERIO PELO USUÁRIO
$n = readline(); //Lê o valor inserido pelo usuário
for ($i = 1; $i <= $n; $i++) { //Contagem de 1 até o valor inserido pelo usuário
    echo $i . " "; //Imprime o valor da variável $i
}

//ESTRUTURA SIMPLES PARA FIXAÇÃO DE CONCEITO

for ($i = 0; $i < 10; $i++): //inicia o laço

    echo ("5 x $i = " . ($i * 5) . "\n"); //imprime a tabuada do 5

endfor; //finaliza o laço

?>
