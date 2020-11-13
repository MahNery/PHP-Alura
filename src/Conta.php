<?php

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular): string
    {
        $this->titular = $titular;
        $this->validaNomeTitular($nome);
        $this->saldo = 0;

        self::$numeroContas++;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    public function sacar(float $ValorSaque)
    {
        if ($ValorSaque > $this->saldo){
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $ValorSaque;
        }
    }

    public function depositar(float $ValorDeposito): void
    {
        if ($ValorDeposito < 0){
            echo "Valor de depósito deve ser positivo";
        } else {
            $this->saldo += $ValorDeposito;
        }
    }

    public function transferir(float $ValorTransferencia, Conta $contaDestino): void
    {
        if ($ValorTransferencia > $this->saldo){
            echo "Saldo indisponível";
        } else {
            $this->sacar($ValorTransferencia);
            $contaDestino->depositar($ValorTransferencia);
        }
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public static function getNumeroContas(): int
    {
        return Conta::$numeroContas;
    }

    public function getNomeTitular(): string 
    {
        return $this->titular->getNomeTitular();
    }

    public function getCpfTitular(): string 
    {
        return $this->titular->getCpfTitular();
    }
}