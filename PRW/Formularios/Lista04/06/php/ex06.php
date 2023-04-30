<?php


$n1 = $_POST['f_n1'] ?? 0;
$n2 = $_POST['f_n2'] ?? 0;
$freq = $_POST['f_frequencia'] ?? 0;

if($n1 || $n2 || $freq  == null)
{
    echo "Preencha todos os campos<br>";
 echo"<a href='ex6.html'<button>Voltar</button></a>";
    exit;
}

else if(($n1 + $n2) / 2 < 5)
{
    $name = $_POST['f_name'];
    $result = "<span class ='red'>Reprovado por nota</span>";

}
else if($freq < 75)
{
    $name = $_POST['f_name'];
    $result = "Reprovado por frequência";
}
else if ($freq > 75 && ($n1 + $n2) / 2 > 5)
{
    $name = $_POST['f_name'];
    $result = "Aprovado";
}
else{
    $result = "Erro";
}

echo "<fieldset>";
echo "<br>";
echo "Nome: $name";
echo "<br>";
echo "Frequência: $freq";
echo "<br>";
echo "Resultado: $result";
echo "<br>";
echo "</fieldset>";


?>

<a href="ex6.html"><button>Voltar</button></a>
<style>
    .red{
        color: red;
    }
</style>
