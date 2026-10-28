<?php 

//1-Decimal a Binario

$numero=12;

$binario="";

while ($numero != 0) {

$resto= $numero % 2;
$binario= $resto . $binario;
$numero= intdiv($numero, 2);

}

echo $binario . "\n";