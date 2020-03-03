<?php
$geld = array('10', '5', '2', '1');
$aantal = $argv[1];
$restanten = $aantal;
foreach ($geld as $value) {
  if ($aantal >1) {
  $plat = floor($aantal / $value);
  $restanten = $restanten - ($value * $plat);
  echo "$plat x $value euro " . PHP_EOL;
  }
  else {
    echo "Geen wisselgeld, batti";
  }
}

 ?>
