<?php

class Conta
{
    // definir os atributos da conta
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;


    // Métodos da classe
    public function sacar(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo 'Saldo insuficiente!' . PHP_EOL;
            return;
        } 

        $this->saldo -= $valorSacar;            
    }

    public function depositar(float $valorDepositar): void
    {
        if ($valorDepositar <= 0) {
            echo 'Error: Deposite um valor acima de 0' . PHP_EOL;
            return;
        }

        $this->saldo += $valorDepositar;    
    }

    public function transferir(float $valorTransferir, Conta $contaDestino): void
    {
        if ($valorTransferir > $this->saldo) {
            echo 'Saldo insuficiente!' . PHP_EOL;
            return;
        } 
        if ($valorTransferir <=0) {
            echo 'Transfira um valor acima de 0' . PHP_EOL;
            return;
        }

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }
} //Fim classe Conta.



?>
