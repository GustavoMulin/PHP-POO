<?php

abstract class Forma
{
    abstract public function calcular_area();
}

class Retangulo extends Forma
{
    public $b;
    public $h;
    
    function calcular_area()
    {
        return $area = $this->b * $this->h;
    }
}

class Circulo extends Forma
{
    public $raio;

    function calcular_area()
    {
        return $area = 3.14 * ($this->raio)**2;
    }
}

$retangulo = new Retangulo();
$retangulo->b = 12;
$retangulo->h = 5;

echo "A área do retângulo é " . $retangulo->calcular_area() . '<br>';

$circulo = new Circulo();
$circulo->raio = 12;

echo "A área do círuclo é " . $circulo->calcular_area();