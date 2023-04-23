<php?

$numbers = explode(' ', trim(fgets(STDIN));

$sorted = $numbers;
sort($sorted);

foreach ($sorted as $number) {
  echo $number . PHP_EOL;
}

echo PHP_EOL;

foreach ($numbers as $number) {
  echo $number . PHP_EOL;
}
?>
