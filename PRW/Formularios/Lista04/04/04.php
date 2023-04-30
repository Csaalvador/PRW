<?php

$ano = $_POST['ano'];

if($ano % 4 == 0){
    echo "<h2>Ano bissexto</h2>";}
    
else{
    echo "<h2>Não bissexto</h2>";
}
    
?>
