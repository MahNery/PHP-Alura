<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$vinicius = new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new Cpf('6972.394.725-54'), 'Patricia');
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$ana = new Titular(new Cpf('854.557.659-31'), 'Ana');
$terceiraConta = new Conta($ana);
unset($primeiraConta);
echo Conta::recuperaNumeroDeContas();
