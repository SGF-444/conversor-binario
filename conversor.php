<?php 


//conversor decimal-binario

$numero=255;

$binario="";

while ($numero != 0) {

$resto= $numero % 2;
$binario= $resto . $binario;
$numero= intdiv($numero, 2);

}


//rellenar 8 bits
for ($i=strlen($binario); $i < 8; $i++) {
    $binario= "0" . $binario;
}

echo $binario . "\n";



