<?php

class Conta
{
    private $numeroConta;
    private $saldo; 
    protected $titular;

    public function  __construct($numeroConta, $saldo, $cliente)
    {
       $this->numeroConta = $numeroConta;
       $this->saldo = $saldo;
       $this->titular = $cliente;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function deposito($quantia)
    {
        $this->saldo += $quantia;
        echo'Deposito realizado com Sucesso. Saldo atual: ' . $this->saldo;
    }

    public function saque($quantia)
    {
        if($quantia>$this->saldo){
            echo'Saldo insuficiente';
        }
        else{
        $this->saldo -= $quantia;
        echo'Saque realizado com Sucesso. Saldo atual: ' . $this->saldo;
        }
    }
}