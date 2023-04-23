<?php

//Como declarar um vetor lendo do teclado
$vetor = array();
for($i=0; $i<10; $i++){
    echo "Digite um número: ";
    $vetor[$i] = (int) fgets(STDIN);
}

//Como acessar um elemento do vetor
echo $vetor[0];

//Como alterar um elemento do vetor
$vetor[0] = 100;

//Como adicionar um elemento no final do vetor
$vetor[] = 11;

//como pegar o menor elemento do vetor
echo min($vetor);

//como pegar o maior elemento do vetor
echo max($vetor);   