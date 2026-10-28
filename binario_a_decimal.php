<?php


//Binario a decimal

$binario="00001010";

$decimal=0;

$longitud = strlen($binario);

for ($i=0; $i < $longitud; $i++) {
  if ($binario[$i] == "1" ) {
    $decimal += 2 ** ($longitud - $i - 1);

  }

}



echo $decimal . "\n";