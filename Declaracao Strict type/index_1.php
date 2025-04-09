<?php

// DECLARAÇÃO STRICT TYPES

/*
A linguagem PHP é muito conhecida por ser fracamente tipada.
Na realidade, muitos programadores atualmente ainda usam
o PHP com variáveis, métodos e parâmetro que não definem
que tipo de valores aceitam ou retornam.

Com a evolução de linguagem, e apesar de não ser obrigatório
o seu uso, a definição de tipos nas propiedades de
uma classe, parâmetros e retorno de funções e métodos
passou a ser possivel.

Neste vídeo vamos ver rapidamente alguns exemplos.
*/

function apresentar1($mensagem)
{
    echo "Mensagem: $mensagem<br>";
}

function apresentar2(string $mensagem)
{
    echo "Mensagem: $mensagem<br>";
}

apresentar1("Mensagem do tipo string");
apresentar2(100);

// Estes exemplos vão funcionar corretamente.