<?php   

$name = $_POST['name'];
$idade = $_POST['idade'];

$dv = ($idade * 365);

echo"<h3>$name, você tem $idade anos de idade, ou seja, $dv dias de vida.</h3>";

echo"<a href='exercicio7.html'><button>Voltar</button></a>";

?>
