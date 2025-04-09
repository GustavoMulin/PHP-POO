<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $profissao;

    public function get_nome()
    {
        return $this->nome;
    }

    public function get_idade()
    {
        return $this->idade;
    }

    public function get_profissao()
    {
        return $this->profissao;
    }

    function apresentar()
    {
        return "O meu nome é {$this->nome}, tenho {$this->idade} anos é minha profissão é {$this->profissao}."; 
    }
}

$name = new Pessoa();
$name -> nome = "Gustavo";
$name -> idade = 21;
$name -> profissao = "Desenvolvedor";

echo $name->apresentar();