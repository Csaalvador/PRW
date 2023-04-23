<?php 

$par = array();
$impar = array();
$i = 0;
$cout_par = 0;
$cout_impar = 0;

while($i < 15){

    $num = trim(fgets(STDIN));

    if($num % 2 == 0){
        $par[$cout_par] = $num;
        $cout_par++;
    }else{
        $impar[$cout_impar] = $num;
        $cout_impar++;
    }
//if par = 5, var par is full
    if($cout_par == 5){
        for($j = 0; $j < 5; $j++){
            echo "par[".$j."] = ".$par[$j]."\n";
        }

        $cout_par = 0;
    }

    if($cout_impar == 5){
        for($j = 0; $j < 5; $j++){
            echo "impar[".$j."] = ".$impar[$j]."\n";
        }

        $cout_impar = 0;
    }

    $i++;
}

for($j = 0; $j < $cout_impar; $j++){
    echo "impar[".$j."] = ".$impar[$j]."\n";
}

for($j = 0; $j < $cout_par; $j++){
    echo "par[".$j."] = ".$par[$j]."\n";
}

?>
$line = array();


}