<?php

require 'src/Calculadora.php';

$nota = [7, 10, 6, 8, 9, 7];

$calculadora = new Calculadora();
$calculadora->calculoMedia($nota);

if ($media){
    echo "<p>A média é $media<p>";
} else {
    echo "<p>Insira as notas para o cálculo da média.</p>";
};