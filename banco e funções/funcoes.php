<?php

function exibeMensagem($mensagem) 
{
    echo $mensagem . '<br>';
};

function sacar(array $conta, float $ValorSaque): array
{
    if ($ValorSaque > $conta['saldo']){
        exibeMensagem("Você não pode sacar!");
    }else {
        $conta['saldo'] -= $ValorSaque;
        exibeMensagem("Você sacou com sucesso!");
    };
    return $conta;
};

function depositar(array $conta, float $ValorDeposito): array
{
    if ($ValorDeposito > 0){
        $conta['saldo'] += $ValorDeposito;
    exibeMensagem("Você depositou com sucesso!");
    } else {
        exibeMensagem("Valor inválido para depósito. O valor devem ser positivos.");
    };
    
    return $conta;
};

function titularLetraMaiuscula (array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
};

function exibeConta(array $conta)
{
    echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']} </li>";
};