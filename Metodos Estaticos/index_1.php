<?php

// MÉTODOS ESTÁTICOS

/*
Métodos estáticos são métodos de uma classe que podem ser
chamados diretamente sem que seja necessário criar um
objeto a partir dessa classe.

Vejamos com um exemplo.
*/

class Matematica
{
    public static function adicionar($a, $b)
    {
        return $a + $b;
    }
}

// Podemos chamar o método escrevendo o nome da classe
// logo depois :: e o nome do método com os respectivos
// parâmetros.
echo Matematica ::adicionar(20, 30); // 50