<?php

class Animal
{
    protected $nome;
    protected $raca;

    function __construct($nome, $raca)
    {
        $this->nome = $nome;
        $this->raca = $raca;
    }
}

class Cao extends Animal
{
    function latir($vezes)
    {
        echo "O {$this->nome} latiu $vezes vezes!<br>";
    }
}

class Gato extends Animal
{
    function miar($vezes)
    {
        echo "O {$this->nome} miou $vezes vezes!<br>";
    }
}

$cao = new Cao("caramelo", "Vira-lata");
$gato = new Gato("thomas", "Persa");

echo $cao->latir(15);
echo $gato->miar(12);