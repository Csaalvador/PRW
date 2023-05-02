<?php
    $number = $_POST['select'];
    echo"<h3>Tabuada do $number:</h3>";
    for($i=0; $i<=10; $i++){
        $nuM= $number*$i;
        echo"<h3> $number X $i = $nuM</h3>"; 
    } 
    
    echo"<a href='ex08.html'><button>Voltar</button></a>";
    
?>