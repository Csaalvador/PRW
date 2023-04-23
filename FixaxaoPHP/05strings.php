<?php

/////////////////////////MANIPULAÇÃO DE STRINGS////////////////////////////////////
//<https://github.com/Csaalvador>
//@Csaalvador

//strlen() - retorna o tamanho de uma string
$nome = "Hcode";
echo strlen($nome);
//este código terá como saída o número 5, pois a string “Hcode” possui cinco caracteres.



//str_replace() - substitui uma palavra por outra
$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";
$novaFrase = str_replace($palavra, "professor", $frase);
echo $novaFrase;
//este código terá como saída a frase “A repetição é a professor da retenção”.



//substr() - retorna uma parte de uma string
$mensagem = "Olá mundo!";
echo substr($mensagem, 4);
//este código terá como saída a palavra “mundo!”, pois são retornados todos os caracteres a partir da posição 4.



//str_pad() - preenche uma string com outra string
$nome = "João";
$novoNome = str_pad($nome, 30, " ", STR_PAD_RIGHT);
echo $novoNome;
//este código terá como saída a palavra “João” com 30 espaços à direita, pois a string “João” possui cinco caracteres e o parâmetro 30 indica que a string deve ter 30 caracteres no total. O parâmetro “ ” indica que os espaços devem ser preenchidos com espaços em branco e o parâmetro STR_PAD_RIGHT indica que os espaços devem ser preenchidos à direita da string.



//str_repeat() - repete uma string
$mensagem = "Olá mundo!";
echo str_repeat($mensagem, 5);
//este código terá como saída a frase “Olá mundo!Olá mundo!Olá mundo!Olá mundo!Olá mundo!”.


//strtoupper() - deixa uma string em maiúsculo
$mensagem = "Olá mundo!";
echo strtoupper($mensagem);
//este código terá como saída a frase “OLÁ MUNDO!”.



//strtolower() - deixa uma string em minúsculo
$mensagem = "Olá mundo!";
echo strtolower($mensagem);
//este código terá como saída a frase “olá mundo!”.



//ucfirst() - deixa a primeira letra de uma string em maiúsculo
$mensagem = "olá mundo!";
echo ucfirst($mensagem);
//este código terá como saída a frase “Olá mundo!”.



//ucwords() - deixa a primeira letra de cada palavra de uma string em maiúsculo
$mensagem = "olá mundo!";
echo ucwords($mensagem);
//este código terá como saída a frase “Olá Mundo!”.


//strrev() - inverte uma string
$mensagem = "Olá mundo!";
echo strrev($mensagem);
//este código terá como saída a frase “!odnum álO”.


//strpos() - encontra a posição de uma string
$mensagem = "Olá mundo!";
echo strpos($mensagem, "mundo");
//este código terá como saída o número 4, pois a palavra “mundo” está na quarta posição da string “Olá mundo!”.



//stripos() - encontra a posição de uma string sem levar em conta se é maiúsculo ou minúsculo
$mensagem = "Olá mundo!";
echo stripos($mensagem, "Mundo");
//este código terá como saída o número 4, pois a palavra “mundo” está na quarta posição da string “Olá mundo!”.



//trim() - remove espaços no início e no fim de uma string
$mensagem = "Olá mundo!";
echo trim($mensagem);
//este código terá como saída a frase “Olá mundo!”.



//ltrim() - remove espaços no início de uma string
$mensagem = "Olá mundo!";
echo ltrim($mensagem);
//este código terá como saída a frase “Olá mundo!”.



//rtrim() - remove espaços no fim de uma string
$mensagem = "Olá mundo!";
echo rtrim($mensagem);
//este código terá como saída a frase “Olá mundo!”.



//str_split() - transforma uma string em um array
$mensagem = "Olá mundo!";
print_r(str_split($mensagem));
//este código terá como saída um array com cada letra da string “Olá mundo!”.



//explode() - transforma uma string em um array
$mensagem = "Olá mundo!";
print_r(explode(" ", $mensagem));
//este código terá como saída um array com cada palavra da string “Olá mundo!”.



//implode() - transforma um array em uma string
$mensagem = array("Olá", "mundo!");
echo implode(" ", $mensagem);
//este código terá como saída a frase “Olá mundo!”.



//str_word_count() - conta quantas palavras tem uma string
$mensagem = "Olá mundo!";
echo str_word_count($mensagem);
//este código terá como saída o número 2, pois a string “Olá mundo!” possui duas palavras.



//str_shuffle() - embaralha uma string
$mensagem = "Olá mundo!";
echo str_shuffle($mensagem);
//este código terá como saída uma frase embaralhada, como por exemplo “!dnum álO”.



//strchr() - encontra a primeira ocorrência de uma string
$mensagem = "Olá mundo!";
echo strchr($mensagem, "mundo");
//este código terá como saída a palavra “mundo!”, pois são retornados todos os caracteres a partir da primeira ocorrência da palavra “mundo”.



//strstr() - encontra a primeira ocorrência de uma string
$mensagem = "Olá mundo!";
echo strstr($mensagem, "mundo");
//este código terá como saída a palavra “mundo!”, pois são retornados todos os caracteres a partir da primeira ocorrência da palavra “mundo”.



//str_ireplace() - substitui uma palavra por outra sem levar em conta se é maiúsculo ou minúsculo
$mensagem = "Olá mundo!";
echo str_ireplace("Mundo", "PHP", $mensagem);
//este código terá como saída a frase “Olá PHP!”, pois a palavra “mundo” foi substituída pela palavra “PHP”.



//Uso do substr escolhendo a posição de início da parte
$nome = "Linha de Código";
$parte = substr($nome, 8);
echo $parte;
//Este código terá como saída a palavra “Código”, pois são retornados todos os caracteres a partir da posição 8.



//Uso do substr informando o início de comprimento da parte
$nome = "Linha de Código";
$parte = substr($nome, 0, 5);
echo $parte;
//Este código terá como saída a palavra “Linha”, pois são retornados os cinco primeiros caracteres da string.



// Uso do substr informando início da parte e comprimento negativo
$nome = "Linha de Código";
$parte = substr($nome, 6, -7);
echo $parte;
//Este código, por sua vez, terá como saída a palavra “de”. O início do substring é definido na posição 6 e, a partir do fim do string, são contados sete caractere “para trás”.



//Uso do str_pad definindo string complementar.
    $nome = "PHP";
    $nome_completo = str_pad($nome, 5, "*");
    echo $nome_completo;
//No código acima, definimos que o string deve ser complementado com um asterisco. Dessa vez o retorno será “PHP**”, novamente com cinco caracteres ao todo.



//Usando str_pad definindo a posição do complemento
$nome = "PHP";
$left = str_pad($nome, 5, "*", STR_PAD_LEFT);
$right = str_pad($nome, 5, "*", STR_PAD_RIGHT);
$both = str_pad($nome, 5, "*", STR_PAD_BOTH);
echo $left;
echo "\n";
echo $right;
echo "\n";
echo $both;
//Este código mostra os três valores possíveis para o quarto argumento. Ao fim da execução, a variável $left terá o valor “**PHP”¸ enquanto a variável $right possuirá o valor “PHP**” e a variável $both conterá “*PHP*”


//USANDO CTYPEUPPER E CTYPELOWER   
$nome = "Linha de Código";
if (ctype_upper($nome)) {
    echo "A string está em maiúsculo";
} else {
    echo "A string não está em maiúsculo";
}
//No código acima, verificamos se a string está em maiúsculo. Como não está, o retorno será “A string não está em maiúsculo”.



//insset() - verifica se uma string está contida em outra
$mensagem = "Olá mundo!";
if (strpos($mensagem, "mundo") !== false) {
    echo "A string está contida";
} else {
    echo "A string não está contida";
}
//No código acima, verificamos se a string “mundo” está contida na string “Olá mundo!”. Como está, o retorno será “A string está contida”.


//preg_match - verifica se uma string está contida em outra
$mensagem = "Olá mundo!";
if (preg_match("/mundo/", $mensagem)) {
    echo "A string está contida";
} else {
    echo "A string não está contida";
}

?>