<?php

// CLASSES ABSTRACT

/*
Ao herdar de uma classe abstract, o método da classe filha
deve ser definido com o mesmo nome, e um access modfifier com restrição
igual ou menor.

Por exemplo, se o método abstracto for definido com protected,
o método da classe filha deve ser definido como protected ou public.
Não pode ser privado.

Além disso, o tipo e o número de argumetos exigidos devem ser os mesmos.
No entanto, as classes filhas podem ter argumentos opcionais.

Assim, quando uma classe filha é herdada de uma classe abstracta, temos as seguintes regras:

> O método da classe filha deve ser definido com o mesmo nome;
> O método da classe filha deve ser definido com o mesmo access modifier ou outro menso restrito
> O número de argumentos necessários deve ser o mesmo.
    No entanto, a classe filha pode ter argumentos opcionais adicionais
*/

abstract class Pessoa
{
    abstract public function falar($mensagem);
}

class Cliente extends Pessoa
{
    public function falar($mensagem, $autor = 'joao')
    {
        echo "$mensagem - $autor";
    }
}

$cliente = new Cliente();
$cliente->falar('Mensagem de teste', 'carlos');