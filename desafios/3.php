<?php
$peso = 100;
$altura = 1.58;
$imc = $peso / ($altura ** 2);
if ($imc < 18.5){
    echo "Seu IMC é $imc. Você está abaixo do peso ideal, procure um médico." . PHP_EOL;
}
elseif ($imc >= 18.5 && $imc <= 24.9){
    echo "Seu IMC é $imc. Você está em seu peso ideal. Parabéns!" . PHP_EOL;
}
else if ($imc > 24.9 && $imc <= 29.9) {
    echo "Seu IMC é $imc. Você está com sobrepeso, procure um médico." . PHP_EOL;
}
else if ($imc > 29.9 && $imc <= 34.9){
    echo "Seu IMC é $imc. Você está com obesidade de primeiro grau, procure um médico." . PHP_EOL;
}
else if ($imc > 34.9 && $imc <= 39.9){
    echo "Seu IMC é $imc. Você está com obesidade de segundo grau, procure um médico." . PHP_EOL;
}
else {
    "Seu IMC é $imc. Você está com obesidade mórbida, procure um médico." . PHP_EOL;
}