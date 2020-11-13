<?php

class Titular
{
    private $cpf;
    private $nome;
    
    public function __constuct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function recuperaNome(): string 
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