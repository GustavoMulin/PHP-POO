<?php

//  O QUE SÃO TRAITS E COMO UTILIZAR

/*
O PHP apenas suporta herenças únicas: uma classe só pode herdar
de um aoutra classe.

Imagina que queres que a classe seja derivada de outro e, ao mesmo
tempo, possa "herdar" outras funcionalidades a partir de outras estruturas.

É neste contexto que os traits surgem.

Basicamente, traits permitem declarar métodos que podem ser usados
em mútiplas classes.
Na sua vertente mais avançada, os traits podem conter métodos abstratos
que podem ser usados em múlTiplas classes, e esses métodos podem
ter qualquer tipo de access modifier.

Vamos perceber o conceito através de exemplos simples.
*/

trait funcoes_matematicas
{
    public function adicionar($a, $b)
    {
        return $a + $b;
    }

    public function subtrair($a, $b)
    {
        return $a - $b;
    }

    public function multiplicar($a, $b)
    {
        return $a * $b;
    }

    public function dividir($a, $b)
    {
        return $a / $b;
    }
}

class Matematica
{
    use funcoes_matematicas;
}

$calculadora = new Matematica();
echo $calculadora->adicionar(20, 10);
echo '<br>';
echo $calculadora->subtrair(20, 10);
echo '<br>';
echo $calculadora->multiplicar(20, 10);
echo '<br>';
echo $calculadora->dividir(20, 10);
echo '<br>';

/*
O que aconteceu aqui?
Como podes facilmente concluir pelo exemplo,
foi possivel incorporar dentro da classe Matematica,
um conjunto de funções pertencente um trait.
*/