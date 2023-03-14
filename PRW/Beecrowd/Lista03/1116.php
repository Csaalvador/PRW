<?php


$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {

    list($x, $y) = sscanf(fgets(STDIN), "%d %d");


  if ($y == 0) {
    echo "divisao impossivel\n";
  } else {

    $resultado = $x / $y;
    echo sprintf("%.1f\n", $resultado);
  }
}

?>
