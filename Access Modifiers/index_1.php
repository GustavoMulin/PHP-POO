<?php

// ACCESS MODIFIERS

/* 
Já vimos que a classes podem ter PROPIEDADES (variáveis da classe)
e MÉTODOS (funções da classe).

As PROPIEDADES e os MÉTODOS podem ter níveis de acesso distintos
que permitem controlar a que nível podemos ter acesso a eles ou não.

PUBLIC - a propiedade ou método pode ser acedida a partir de qualquer lado.
É o acess modifier padrão.

PROTECTED - a propiedade ou método pode ser acedida dentro da classe
e de dentro de classes derivadas dela (veremos mais a a frente o que são classes derivadas).

PRIVATE - a propiedade ou método só pode ser acedido DENTRO da classe.

vejamos um exemplo muito simples.
*/

class Homem
{
    public $nome;
    protected $apelido;
    private $cor_de_cabelo;
}

// vamos fazer a instanciação de Homem = criar um objeto a partir da classe
$h = new Homem();

// Agora, se tentármos o acesso a cada uma das propiedades:

$h->nome = "Gustavo";                   // OK
$h->apelido = "Barbosa";                // ERRO
$h->cor_de_cabelo = "castanho";         // ERRO