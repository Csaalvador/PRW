<?php
    $name = $_POST['name'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $freq = $_POST['freq'];
    $media = ($n1 + $n2)/2;

    if($freq >= 75){

        if($media > 5){
            echo"<h3>Aprovado</h3>";

        }else{
            
            echo"<h3 style='color: red;'>Reprovado por nota</h3>";
        }
    }else{
        echo"<h3>Reprovado por frequência</h3>";
    }
    
    echo"<a href='exercicio6.html'><button>Voltar</button></a>";
