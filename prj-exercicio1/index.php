<?php

//Digite a placa do carro.
$numPlaca = 1947;

$numPlaca = $numPlaca % 1000;
$numPlaca = $numPlaca % 100;
$numPlaca = $numPlaca % 10;

if ($numPlaca == 1 || $numPlaca == 2) {
    echo("O dia de rodizio do veículo é Segunda-feira.");
} elseif ($numPlaca == 3 || $numPlaca == 4) {
    echo("O dia de rodizio do veículo é Terça-feira.");
} elseif ($numPlaca == 5 || $numPlaca == 6) {
    echo("O dia de rodizio do veículo é Quarta-feira.");
} elseif ($numPlaca == 7 || $numPlaca == 8) {
    echo("O dia de rodizio do veículo é Quinta-feira.");
} elseif ($numPlaca == 9 || $numPlaca == 0) {
    echo("O dia de rodizio do veículo é Sexta-feira.");
}










?>