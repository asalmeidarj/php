<?php

class Conta
{
    // definir os atributos
    // Atributos da instância
    private Titular $titular
    private float $saldo;
    // Atributos da classe
    private static $numeroContas = 0;

    
    // Método construtor
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroContas++;
    }

    
    // Método desconstrutor
    public function __destruct()
    {
        self::$numeroContas--;
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
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf;
    }



} //Fim classe Conta.



?>
