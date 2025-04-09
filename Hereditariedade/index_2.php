<?php

// HEREDITARIEDADE

// vejamos os conceitos num exemplo mais prático

class Animal_de_estimacao
{
    protected $nome;
    protected $especie;
    protected $raca;

    function __construct($nome, $especie, $raca)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
    }
}

class Cao extends Animal_de_estimacao
{
    function ladrar($vezes)
    {
        echo "O {$this->nome} ladrou $vezes vezes!<br>";
    }
}

class Gato extends Animal_de_estimacao
{
    function miar($vezes)
    {
        echo "O {$this->nome} miou $vezes vezes!<br>";
    }
}

// instanciação das calsses em objetos
$cao = new Cao('Snoopy', 'Canis lupus', 'Beagle');
$gato = new Gato('Garfield', 'Felis catus', 'Persa');

// não só cada objeto tem as propiedades da classe base,
// como também tem as funcionalidades que cada classe implementa,
// Portanto:

echo $cao->ladrar(10);
echo '<br>';
echo $gato->miar(10);

/*
Observe que, na classe Animal.de_estimação, as propiedades
foram definidas com access modifier PROTECTED.
Já tinha referido que no caso do PROTECTED, a propiedade ou método
pode ser acedida dentro da classe e dentro de classes derivadas dele.
*/