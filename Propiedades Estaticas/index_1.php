<?php

// PROPIEDADES ESTÁTICAS

/*
A semelhança dos métodos, as classes também podem
ter propiedades estáticas. Essas propiedades podem
ser chamadas diretamente sem que seja necessário criar
uma instância da classe.
*/

class Matematica
{
    public static $pi = 3.14;
}

// para chamar a propiedade, usamos os ::

echo 'Resultado = ' . Matematica::$pi * 10; // Resultado = 31.4