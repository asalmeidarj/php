<?php

class Titular
{
    // Atributos
    private string $nome;
    private string $cpf;

    // Método construtor
    public function __construct(string $nome, string $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    // Métodos de instância
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    private function validaNome(string $nome): void
    {
        if (mb_strlen($nome) < 5)
        {
            echo 'O nome deve conter mais de 5 caracteres' . PHP_EOL;
            exit();
        }
    }

}
