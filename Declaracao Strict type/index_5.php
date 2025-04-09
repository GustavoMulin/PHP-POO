<?php

// DECLARAÇÃO STRICT TYPES

declare (strict_types = 1);

class Pessoa
{
    public string $nome;
    public string $apelido;
    public float $altura;

    public function falar(string $mensagem) : string
    {
        return "O meu nome é {$this->nome} e a mensagem é: $mensagem";
    }
}

$p = new Pessoa();
$p->nome = "Gustavo";
echo $p->falar("Bom dia!");

// Estes conceitos são importantes numa linguagem de programação,
// uma vez que permitem evitar erros incovenientes.
// A maior parte das linguagens de programação de alto nível usam
// variáveis tipadas. Esse é o caminho a seguir para alcançar no PHP
// as melhores práticas como programador.