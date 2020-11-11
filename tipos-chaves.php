<?php

$array = [
    1 => 'a',
    '1' => 'b', // converte o inteiro de uma string num inteiro
    1.5 => 'c', // aproxima o float pro menor inteiro
    true => 'd' // true é um booleano equivalente a 1
];

// a leitura da chave não se repete e somente o último equivalente da chave é lido

foreach ($array as $item){
    echo $item . PHP_EOL;
}