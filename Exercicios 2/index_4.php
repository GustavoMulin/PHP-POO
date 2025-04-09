<?php

final class Configuracao
{
    public $fonte;
    
    public function alterar_fonte()
    {
        echo "Fonte Alterada! para {$this->fonte}";
    }
}

class config_perso extends Configuracao
{
    public $cor;

    public function dark()
    {
        echo "Cor Alterado para {$this->cor}";
    }
}

$config = new config_perso();
$config->cor = "preto";
$config->fonte = "Arial";

echo $config->alterar_fonte();
echo '<br>';
echo $config->dark();