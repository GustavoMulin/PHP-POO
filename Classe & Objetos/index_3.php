<?php

// COMO ESCREVER UMA CLASSE E INSTANCIAR UM OBJETO

/* 
As classes podem ter PROPIEDADES E MÉTODOS

PROPIEDADES são variáveis da classe

MÉTODOS são funções da classe.

A palavra-chave $this refere-se ao objeto atual
e só esta disponivel dentro dos métodos (funções da classe)
*/

class Fruto
{
    // Propiedades
    public $nome;
    public $cor;
    public $peso;

    // Métodos
    public function apresentar_fruto() 
    {
        return "O meu nome é {$this->nome}, a minha cor é {$this->cor} e tenho {$this->peso} gramas";
    }
}

$laranja = new Fruto();
$laranja -> nome = "Laranja";
$laranja -> cor = "Laranja";
$laranja -> peso = "125";

$banana = new Fruto();
$banana -> nome = "Banana";
$banana -> cor = "Amarela";
$banana -> peso = "178";

echo $laranja->apresentar_fruto();
echo '<br>';
echo $banana->apresentar_fruto();