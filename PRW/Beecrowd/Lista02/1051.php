<?php

$salario = (float)readline();

if ($salario <= 2000.00) {
  echo "Isento\n";
} else {
  $imposto = 0.0;
  if ($salario > 2000.00 && $salario <= 3000.00) {
    $imposto = ($salario - 2000.00) * 0.08;
  } elseif ($salario > 3000.00 && $salario <= 4500.00) {
    $imposto = 1000.00 * 0.08 + ($salario - 3000.00) * 0.18;
  } elseif ($salario > 4500.00) {
    $imposto = 1000.00 * 0.08 + 1500.00 * 0.18 + ($salario - 4500.00) * 0.28;
  }
  echo "R$ " . number_format($imposto, 2, '.', '') . "\n";
}


?>
