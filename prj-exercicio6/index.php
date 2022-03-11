<?php

$i;
$impar = 0;
$par = 1;

for ($i = 1; $i <= 20; $i++)
    if ($i % 2 == 0) {
        $par = $par * $i;
    } else {
        $impar = $impar + $i;
    }
echo("Multiplicação dos números pares: " . $par . "<br>" . "Soma dos números ímpares: " . $impar);
    

?>