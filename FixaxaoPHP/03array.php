<?php

//COMO FUNCIONA UMA ARRAY
$frutas = array("laranja", "abacaxi", "melancia");
print_r($frutas);



//como adicionar um elemento a array
$frutas[] = "banana";
print_r($frutas);



//como remover um elemento da array
unset($frutas[2]);
print_r($frutas);



//como ordenar uma array
sort($frutas);
print_r($frutas);



//como contar os elementos de uma array
echo count($frutas);



//como inverter uma array
print_r(array_reverse($frutas));



//como transformar uma array em string
echo implode(",", $frutas);


//como transformar uma string em array
$novaFruta = "banana,maça,pera";
$arrayFruta = explode(",", $novaFruta);
print_r($arrayFruta);



//como verificar se um elemento existe em uma array
if(in_array("banana", $arrayFruta)){
    echo "Existe";
}else{
    echo "Não existe";
}



//como verificar se uma array é uma array
if(is_array($arrayFruta)){
    echo "É uma array";
}else{
    echo "Não é uma array";
}



//como pegar um elemento de uma array
echo $arrayFruta[0];



//como percorrer uma array
foreach($arrayFruta as $fruta){
    echo $fruta . "<br>";
}




//como percorrer uma array com chave e valor
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);

foreach($carros as $indice => $valor){
    echo $indice . "=>" . $valor . "<br>";
}



//como ler valores de um teclado e adicionar em uma array flexivel
$frutas = array();

for($i = 0; $i < 4; $i++){
    echo "Digite uma fruta: ";
    $fruta = (string) fgets(STDIN);
    $frutas[] = $fruta;
}



//array unique - remove elementos repetidos de uma array
$frutas = array("laranja", "abacaxi", "melancia", "laranja", "laranja");
print_r(array_unique($frutas));



//array push - adiciona um ou mais elementos no final de uma array e retorna o número de elementos 
$frutas = array("laranja", "abacaxi", "melancia");
array_push($frutas, "banana", "morango");
print_r($frutas);



//array pop - exclui o último elemento de uma array e retorna o elemento excluído
$frutas = array("laranja", "abacaxi", "melancia");
array_pop($frutas);
print_r($frutas);



//array shift - exclui o primeiro elemento de uma array e retorna o elemento excluído
$frutas = array("laranja", "abacaxi", "melancia");
array_shift($frutas);
print_r($frutas);



//array unshift - adiciona um ou mais elementos no início de uma array e retorna o número de elementos
$frutas = array("laranja", "abacaxi", "melancia");
array_unshift($frutas, "banana", "morango");
print_r($frutas);



//array combine - combina dois arrays em um
$keys = array("campeão", "vice", "terceiro");
$values = array("vasco", "flamengo", "botafogo");
$times = array_combine($keys, $values);
print_r($times);



//array sum - calcula a soma dos elementos de uma array
$soma = array(2, 2, 2, 2, 2);
echo array_sum($soma);

//array product - calcula o produto dos elementos de uma array
$produto = array(2, 2, 2, 2, 2);
echo array_product($produto);


//indica o menor valor de uma array
$menor = array(2, 2, 2, 2, 2);
echo min($menor);


//indica o maior valor de uma array
$maior = array(2, 2, 2, 2, 2);
echo max($maior);

//seleciona o menor valor de uma array
$menor = array(2, 2, 2, 2, 2);
echo array_search(min($menor), $menor);



//mostra o menor elemento de uma array
$menor = array(2, 2, 2, 2, 2);
echo min($menor);








?>