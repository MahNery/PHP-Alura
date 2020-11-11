<?php

$contaCorrente = [
    '234.585.761-02' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '201.597.634-82' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    '857.924.659-01' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contaCorrente['251.892.570-23'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach($contaCorrente as $cpf => $conta){
    echo $cpf . " - " . $conta['titular'] . " - " . $conta['saldo'] . PHP_EOL;
}