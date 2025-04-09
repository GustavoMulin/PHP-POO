<?php

class Humano
{
    private $masculino;
    private $feminino;
    private $desconhecidos;

    public function definir($sexo,$nome)
    {
        if (strtoupper($sexo) == 'M') {
            $this->masculino[] = $nome;
        } else if (strtoupper($sexo) == 'F') {
            $this->feminino[] = $nome;
        } else {
            $this->desconhecidos[] = $nome;
        }
    }
    public function get_masculino()
    {
        return $this->masculino;
    }

    public function get_feminino()
    {
        return $this->feminino;
    }

    public function get_desconhecidos()
    {
        return $this->desconhecidos;
    }
}