<?php

class Conta
{
    // definir os atributos
    // Atributos da instância
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    // Atributos da classe
    private static $numeroContas = 0;

    
    // Método construtor
    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        self::$numeroContas++;
    }


    // Métodos státicos
    public static function recuperaNumeroContas(): int
    {
        return self::$numeroContas;
    }
    
    
    // Métodos de instância
    public function saca(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo 'Saldo insuficiente!' . PHP_EOL;
            return;
        } 

        $this->saldo -= $valorSacar;            
    }

    public function deposita(float $valorDepositar): void
    {
        if ($valorDepositar <= 0) {
            echo 'Error: Deposite um valor acima de 0' . PHP_EOL;
            return;
        }

        $this->saldo += $valorDepositar;    
    }

    public function transferi(float $valorTransferir, Conta $contaDestino): void
    {
        if ($valorTransferir > $this->saldo) {
            echo 'Saldo insuficiente!' . PHP_EOL;
            return;
        } 
        if ($valorTransferir <=0) {
            echo 'Transfira um valor acima de 0' . PHP_EOL;
            return;
        }

        $this->saca($valorTransferir);
        $contaDestino->deposita($valorTransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    private function validaNomeTitular(string $nome): void
    {
        if (mb_strlen($nome) < 5)
        {
            echo 'O nome deve conter mais de 5 caracteres' . PHP_EOL;
            exit();
        }
    }




} //Fim classe Conta.



?>
