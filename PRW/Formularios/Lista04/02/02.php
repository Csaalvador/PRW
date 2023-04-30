<?php
$texto = $_POST['texto'];
$textarea = $_POST['textarea'];
$checkbox = $_POST['checkbox'];
$radio = $_POST['radio'];
$select = $_POST['select'];

echo "Texto: $texto<br>";
echo "Textarea: $textarea<br>";
echo "Checkbox: ";
echo $checkbox ? "Não é um robô <br>" : "Vish...<br>";
echo "Radio: $radio<br>";
echo "Select: $select<br>";
?>
