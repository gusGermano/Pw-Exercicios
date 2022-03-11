<?php

$num1 = 20;
$num2 = 50;
$num3 = 10;

if ($num1 > $num2 && $num1 > $num3) {
    echo("O maior valor é " . $num1);
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo("O maior valor é " . $num2);    
} elseif ($num3 > $num1 && $num3 > $num2) {
    echo("O maior valor é " . $num3);  
} 
echo("<br>");
if ($num1 < $num2 && $num1 < $num3) {
    echo("O menor valor é " . $num1);    
} elseif ($num2 < $num1 && $num2 < $num3) {
    echo("O menor valor é " . $num2);  
} elseif ($num3 < $num1 && $num3 < $num2) {
    echo("O menor valor é " . $num3); 
}

?>