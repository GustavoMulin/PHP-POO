<?php

// COMO USAR NAMESPACES E QUAL A SUA UTILIDADE

/*
O conceito de Namespaces é muito importante na programação
orientada a objetos.

Permitem resolver dois problemas:
- Organizar melhor as classes permitindo agrupá-las num "espaço"
- Permitem que existam dentro do mesmo projeto classes com o mesmo nome,
  mas em nasmespaces diferentes.

Por exemplo, podes ter uma classe que definiu no teu código e
juntar ao teu projeto uma outra classe criada por outro programador.
Verificar que, afinal, ambas as classes têm o mesmo nome.
Não necessita alterar o nome das classes. Basta que estejam em
namespaces diferentes e tens o problema resolvido.

Usar nasmespaces dentro dos projetos de média e larga escala, é uma
forma de manter o código mais bem organizado.
*/

// a expressão NAMESPACE deve ser sempre a primeira declaração no topo do script
namespace Classes_principais;

// Vamos criar uma classe dentro deste namespace
class Matematica
{
    public function adicionar($a, $b)
    {
        return $a + $b;
    }

    public function subtrair($a, $b)
    {
        return $a - $b;
    }
}