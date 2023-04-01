<?php

$impar = array(5);
$par = array(5);
for($i = 0; $i <= 15; $i++ ){
$x = (int) fgets(STDIN);

if($x % 2 == 0){
$par[] = $x;
if(count($par) == 5){
for($j = 0; $j < 5; $j++){
echo "par[$j] = $par[$j] ". PHP_EOL;
}
}

}else{
$impar[] = $x;
if(count($impar) == 5){
for($j = 0; $j < 5; $j++){
echo "impar[$j] = $impar[$j]" . PHP_EOL;
}
}
}




   
 




}
