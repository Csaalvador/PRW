<?php

do {
  $input = explode(" ", readline());
  $x = (int)$input[0];
  $y = (int)$input[1];

  if ($x > 0 && $y > 0) {
    echo "primeiro\n";
  } elseif ($x < 0 && $y > 0) {
    echo "segundo\n";
  } elseif ($x < 0 && $y < 0) {
    echo "terceiro\n";
  } elseif ($x > 0 && $y < 0) {
    echo "quarto\n";
  }
} while ($x !== 0 && $y !== 0);
