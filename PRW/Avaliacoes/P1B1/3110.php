<?php
  
  $c = readline();
  
  $number = array();
  
  for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
      $number[$i][$j] = readline();
    } 
  }
  for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
      if($number[$i][$j] >= $c){
        echo("Valor Encontrado: ".$number[$i][$j]." Linha: ".$i." Coluna: ".$j."\n");
      }
    } 
  }
?>
