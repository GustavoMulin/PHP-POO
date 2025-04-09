<?php

class Retangulo
{
    public $largura;
    public $altura;

    public function __construct($largura, $altura)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function get_largura()
    {
        return $this->largura;
    }

    public function get_altura()
    {
        return $this->altura;
    }

    function calcular_area()
    {
        return $area = $this->largura * $this->altura;
    }

    function calcular_perimetro()
    {
        return $perimetro = 2 * ($this->largura + $this->altura);
    }
}

$a = new Retangulo(60, 40);

echo "A área do retangulo é de " . $a->calcular_area() . "m²<br>";

echo "O Perímetro é " . $a->calcular_perimetro() . "m";