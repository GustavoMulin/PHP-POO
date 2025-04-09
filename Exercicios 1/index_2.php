<?php

class Carro
{
    public $marca;
    public $modelo;
    public $ano;

    public function get_marca()
    {
        $this->marca;
    }

    public function get_modelo()
    {
        $this->modelo;
    }

    public function get_ano()
    {
        $this->ano;
    }

    function exibir_informacoes()
    {
        return "A marca do carro é {$this->marca} com o modelo {$this->modelo} o ano do carro é {$this->ano}.";
    }
}

$carro = new Carro();
$carro->marca = "Lamborghini";
$carro->modelo = "Urus";
$carro->ano = 2018;

echo $carro->exibir_informacoes();
