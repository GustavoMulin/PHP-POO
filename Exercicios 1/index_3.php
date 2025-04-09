<?php

class ContaBancaria 
{
    private $numeroConta;
    private $titular;
    private $saldo;

    public function __construct(string $numeroConta, string $titular, float $saldoInicial) 
    {
        $this->numeroConta = $numeroConta;
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function getNumeroConta(): string 
    {
        return $this->numeroConta;
    }

    public function getTitular(): string 
    {
        return $this->titular;
    }

    public function getSaldo(): float 
    {
        return $this->saldo;
    }

    public function depositar(float $valor): void 
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ $valor realizado com sucesso.<br>";
        } else {
            echo "Valor de depósito inválido.<br>";
        }
    }

    public function sacar(float $valor): void 
    {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ $valor realizado com sucesso.<br>";
        } else {
            echo "Saque inválido. Verifique o valor ou saldo insuficiente.<br>";
        }
    }

    public function exibirSaldo(): void 
    {
        echo "Saldo atual: R$ " . $this->saldo. "<br>";
    }
}

$conta1 = new ContaBancaria("1234-5", "Gustavo Barbosa", 1000);

echo "Número da conta: " . $conta1->getNumeroConta() . "<br>";
echo "Titular: " . $conta1->getTitular() . "<br>";
$conta1->exibirSaldo();

$conta1->depositar(500);
$conta1->exibirSaldo();

$conta1->sacar(200);
$conta1->exibirSaldo();

$conta1->sacar(2000);
$conta1->exibirSaldo();