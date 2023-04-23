<?php

$n = explode (" ", readline());


if ($n[0]==1){
 
 $calc=$n[1]*4.00;
}

else if($n[0]==2){
    $calc=$n[1]*4.50;
} 

else if ($n[0]==3){
    $calc=$n[1]*5.00;
}

else if($n[0]==4){
    $calc=$n[1]*2.00;
    
}

else if($n[0]==5){
    $calc=$n[1]*1.50;
}

$calc = number_format($calc,2,".","");

echo "Total: R$ $calc\n";

?>
