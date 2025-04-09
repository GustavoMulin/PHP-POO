<?php

// COMO USAR NAMESPACES E QUAL A SUA UTILIDADE

// Como vamos usar a classe que criámos no script anterior.
// 1. Vamos importar o script

use Classes_principais\Matematica;

require_once('index_1.php');

// 2. Para podermos instanciar a classe do script index_1.php,
// temos que ter em atenção o seu namespace.

$matematica = new Matematica(); // NOK
// Fatal error: Uncaught Error: Class "Matematica" not found

$matematica = new Classes_principais\Matematica();
echo $matematica->adicionar(10, 20);    // 30

// Vamos ver então o que os nasmespaces permitem fazer.