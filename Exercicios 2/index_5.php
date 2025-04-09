<?php

trait Logavel
{
    public function log($mensagem)
    {
        $data_hora = date('Y-m-d H:i:s');
        echo "$data_hora : $mensagem";
    }
}

trait Serializavel
{
    public function serializar()
    {
        return;
    }
}

class Usuario
{
    use Logavel, Serializavel;
}

$user = new Usuario();
