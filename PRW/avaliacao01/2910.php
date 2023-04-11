<?php
  while(true){
    $n = readline();
    
    if($n == 0) break;
    
    $x = readline();
      
    $x = explode(" ", $x);
    $td = intval($x[0]);
    $yd = intval($x[1]);
      
    for($i = 0; $i < $n; $i++){
      
      $y = readline();
      
      $y = explode(" ", $y);
      $tr = intval($y[0]);
      $yr = intval($y[1]);
      
      if($td == $tr || $yd == $yr) echo("divisa\n");
      else if($tr > $td){
        if($yr > $yd) echo("NE\n");
        else echo ("SE\n");
      }else{
        if($yr > $yd) echo("NO\n");
        else echo ("SO\n");
      }
    }
  }
?>
