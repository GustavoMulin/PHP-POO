<?php

// COMO CHAMAR O CONSTRUCT DE UMA CLASSE PAI

/*
Esta funcionalidade não vai está apenas destinadad ao construtor.
Se quiser criar um novo método dentro da classe filha
e ainda assim quiser executar o que está na implementação
original, podes usar a expressão parent::

E isto aplica-se à chamda do método com o mesmo nome, como
a métodos com outro nome.
*/

class Veiculo
{
    public $marca;

    public function apresentar()
    {
        echo "Sou da marca: {$this->marca}.";
    }

    public function teste()
    {
        // ...
    }
}

class Automovel extends Veiculo
{
    public function apresentar()
    {
        parent::apresentar();
        echo '<br>';
        echo "Chamei a função da classe pai e ainda adicionei este código!";
    }
}

$a = new Automovel();
$a->marca = "Ferrari";
$a->apresentar();