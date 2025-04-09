<?php

class Veiculo
{
    final function ligar_motor()
    {
        echo "Motor ligado! VrumVrum";
    }
}

class Carro extends Veiculo
{
    public $som;
}

$carro = new Carro();

$carro->ligar_motor();