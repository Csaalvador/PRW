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




?>