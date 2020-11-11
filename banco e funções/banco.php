<?php

require_once 'funcoes.php';

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

titularLetraMaiuscula($contaCorrente['251.892.570-23']);

$contaCorrente ['857.924.659-01'] = depositar($contaCorrente['857.924.659-01'], 800);

$contaCorrente ['857.924.659-01'] = sacar($contaCorrente['857.924.659-01'], 500);

unset ($contaCorrente['234.585.761-02']);

foreach($contaCorrente as $cpf => $conta){
    exibeConta($conta);
};

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dados bancários </title>
    </head>
    <body>
        <h1>Contas correntes</h1>
        <dl>
            <?php
                foreach($contaCorrente as $conta){ ?>
                <dt>
                    <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
                </dt>
                <dd>Saldo: <?= $conta['saldo']; ?></dd>
            <?php } ?>
        </dl>
    </body>
</html>