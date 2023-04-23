<?php

//FATORIAL DE UM NUMERO

function fatorial($n){
    if($n == 0){
        return 1;
    }else{
        return $n * fatorial($n-1);
    }
}

echo fatorial(5);

?>