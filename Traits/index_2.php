<?php

// O QUE SÃO TRAITS E COMO UTILIZAR

trait Movimentos
{
    public function iniciar()
    {
        // ...
    }

    public function saltar()
    {
        // ...
    }

    public function parar()
    {
        // ...
    }
}

trait Movimento_de_voo
{
    public function levantar()
    {
        // ...
    }

    public function voar()
    {
        // ...
    }

    public function aterrar()
    {
        // ...
    }
}

class Ser_vivo
{
    public $nome;
    public $especie;
    public $peso;
}

class Homem extends Ser_vivo
{
    use Movimentos;
}

class Leao extends Ser_vivo
{
    use Movimentos;
}

class Passaro extends Ser_vivo
{
    use Movimentos, Movimento_de_voo;
}