
<?php

$base = 8;
$expoente = 3;
$potencia = 1;
$i;

for ($i = 0; $i < $expoente; $i++) {
    $potencia = $potencia * $base;
}
echo("A potência é: " . $potencia . ".");

?>