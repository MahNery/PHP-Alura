<?php

class Titular
{
    private $cpf;
    private $nome;
    
    public function __constuct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 3){
            echo "Nome precisa de pelo menos 3 caracteres";
            exit();
        }
    }
}