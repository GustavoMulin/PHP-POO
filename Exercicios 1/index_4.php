<?php

class Livro
{
    public $titulo;
    public $autor;
    public $ano_publicacao;

    public function __construct($titulo, $autor, $ano_publicacao)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_publicacao = $ano_publicacao;
    }

    public function get_titulo()
    {
        return $this->titulo;
    }

    public function get_autor()
    {
        return $this->autor;
    }

    public function get_ano_publicacao()
    {
        return $this->ano_publicacao;
    }

    function exibir_info()
    {
        echo "O {$this->titulo} tem como autor o {$this->autor} é o ano de publicação {$this->ano_publicacao}";
    }
}

$leitor = new Livro("As tranças do rei careca", "Jubscreudo", 2009);

$leitor->exibir_info();