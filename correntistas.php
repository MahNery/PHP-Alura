<?php declare (strict_types=1);

require 'autoload.php';


$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12"
];

echo "<pre>";

var_dump($correntistas_e_compras);

ArrayUtil::remover("Giovanni", $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "</pre>";