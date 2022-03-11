<?php

//$depart = 1 (Operacional)
//$depart = 2 (Desenvolvimento)
$depart = 2; 
$salario = 3100;

if ($depart == 1) {
    $salario = $salario * 1.15;
    echo("O valor do salario é: " . $salario);
} 
if ($depart == 2) {
    if ($salario <= 1750) {
        $salario = $salario * 1.12;
        echo("O valor do salario é: " . $salario);  
    } elseif ($salario <= 2000 && $salario > 1750) {
        $salario = $salario * 1.10;
        echo("O valor do salario é: " . $salario);
    } elseif ($salario <= 3000 && $salario > 2000) {
        $salario = $salario * 1.07;
        echo("O valor do salario é: " . $salario);
    } elseif ($salario > 3000) {
        $salario = $salario * 1.05;
        echo("O valor do salario é: " . $salario);
    }
}

