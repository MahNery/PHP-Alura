<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular ('123.456.789-10', 'Vinicius Dias'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;

$segundaConta = new Conta(new Titular ('987.654.321-01', 'Patricia'));

$outra = new Conta(new Titular ('524.687.125-94', 'Ana'));
unset($segundaConta);

echo Conta::getNumeroContas() . PHP_EOL;