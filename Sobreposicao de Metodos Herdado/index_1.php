<?php

// SOBREPOSIÇÃO DE MÉTODOS HERDADOS

/*
O conceito de 'sobreposição é uma tradução simples de um outro
conceito mais conhecido com 'override'.
Na prática significa que podemos ter uma classe 'mãe' onde um
determinado método é definido é podemos alterar o seu código
dentro de uma classe 'filha'.

Vejamos um exemplo:
*/

class Pessoa
{
    public $nome;

    public function identificacao()
    {
        echo "O nome é {$this->nome} e este método é da classe mãe";
    }
}

class Cliente extends Pessoa
{
    public function identificacao()
    {
        echo "O nome é {$this->nome} e este método tem uma nova implementação na classe filha.";
    }
}

// vamos instanciar um objeto de cada classe:

$cliente_1 = new Pessoa();
$cliente_1->nome = 'joao';

$cliente_2 = new Cliente();
$cliente_2->nome = 'carlos';

$cliente1->identificacao();
echo '<br>';
$cliente_2->identificacao();