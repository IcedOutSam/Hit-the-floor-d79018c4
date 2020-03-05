<?php
$geld = array('10', '5', '2', '1');
$aantal = $argv[1];
$restanten = $aantal;
foreach ($geld as $value) {
  if ($aantal >0) {
    $totaal = floor($restanten / $value);
    echo "U krijgt $totaal x €$value " . PHP_EOL;
      $aantal = $restanten;
      $restanten = floor($restanten % $value);
  }
  else {
    echo "Geen wisselgeld, batti";
  }
}

 ?>
