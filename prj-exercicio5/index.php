<?php

$num = 5;
$i;

if ($num <= 1) {
    echo("O número não é primo.");
} elseif ($num == 2) {
    echo("O número é primo.");
}

for ($i = 2; $i < $num; $i++)
    if ($num % $i == 0) {
        echo("O número não é primo");
        break;    
    } else {
        echo("O número é primo");
        break;
    }
    

?>