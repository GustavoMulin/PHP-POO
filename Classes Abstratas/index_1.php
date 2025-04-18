<?php

// CLASSSES ABSTRATAS

/*
Um outro conceito muito importante na Programação Orientada a Objetos
é o conceito de classes abstratas.

Uma classe abstrata, com métodos abstratos, implica que classe
tenha métodos que estão declarados, mas cuja funcionalidade vai ter que ser
implementados nas classes derivadas.

Vejamos um exemplo:
*/

abstract class Pessoa
{
    abstract public function identificar();
    abstract public function falar();
    abstract public function saltar();
}

// Como podes ver, os métodos estão declarados, mas não tem implementação.
// As classes derivaddas vão ter que definir essa implementação.

class Cliente1 extends Pessoa
{
    // Fatal error: Class Cliente1 contains 3 abstract methods
    function identificar()
    {

    }

    function falar()
    {

    }

    function saltar()
    {
        
    }
}

class Cliente2 extends Pessoa
{
    public function identificar()
    {
        
    }

    public function falar()
    {
        
    }

    public function saltar()
    {
        
    }
}

// A classe Cliente2 contém todas as implementações
// que a classe Pessoa 'obriga' a implementar devido ao uso
// da expressão ABSTRACT