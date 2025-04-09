<?php

// AUTOLOAD DE CLASSSES

/*
Até agora vimos que, para usar as classes que criamos,
é necessários fazer a importação do script ou scripts que
contém esses classes. Neste vídeo vamos ver como é possível
fazer O carregamento das classes de forma automática.

Temos duas classes criadas dentro da pasta classes
È uma boa prática cada classe estar no seu ficheiro próprio.
*/

// Na metodologia tradicional ...

require_once ('classes/Humano.php');
require_once ('classes/Animal.php');

$humano = new Humano();
$animal = new Animal();

// Esta metodologia funciona bem, se tem poucas classes para carregar.
// Imagina que em vex de duas, tens dezenas!