<?php

// COMO ESCREVER UMA CLASSE E INSTANCIAR UM OBJETO

/* 
vamos fazer uma peuqena inplementação
*/

class Fruto
{

    // propiedades
    public $nome;
}

$laranja = new Fruto();

// definir o valor da propiedade
$laranja -> nome = "laranja";

// criar um outro objeto do tipo Fruto
$ananas = new Fruto();
$ananas -> nome = "Ananas";

// como vamos apresentar as propiedades de um objeto?
echo $laranja->nome;
echo '<br>';
echo $ananas->nome;

// cada objeto criado a partir da mesma classe, contém as suas propiedades
// de forma completamente independente.