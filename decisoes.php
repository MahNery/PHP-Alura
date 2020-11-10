<?php

$idade = 16;
$numeropessoas = 2;
echo "Você só pode entrar se tiver mais do que 18 anos ou a partir de 16 acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Você pode entrar" . PHP_EOL;
}
elseif ($idade >= 16 && $numeropessoas > 1) {
    echo "Você tem $idade mas está acompanhado, pode entrar." . PHP_EOL;
}
else {
    echo "Você só tem $idade. Você não pode entrar." . PHP_EOL;
}
echo "Adeus!" . PHP_EOL;
