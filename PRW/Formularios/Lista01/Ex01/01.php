<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if(isset($_POST['soma']))
{
    $soma = $n1 + $n2;
    echo "A soma dos valores é: $soma";
}
if(isset($_POST['sub']))
{
    $sub = $n1 - $n2;
    echo "A subtração dos valores é: $sub";
}

if(isset($_POST['mult']))
{
    $mult = $n1 * $n2;
    echo "A multiplicação dos valores é: $mult";
}

if(isset($_POST['div']))
{
    $div = $n1 / $n2;
    echo "A divisão dos valores é: $div";
}

echo "<br><br>";
    ?>
    
<a href="01.html"><button>Voltar</button></a>