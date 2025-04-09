<?php

require_once ('class_num.php');

$num1 = new Numero(5);
$num2 = new Numero(7);
$num3 = new Numero(16);
$num4 = new Numero(123);

echo '<pre>';

echo $num1->get_numero() . '<br>';
echo $num1->par_ou_impar() . '<br>';
echo $num1->raiz_quadrada() . '<br>';
print_r($num1->tabuada());

echo '<hr>';

echo $num2->get_numero() . '<br>';
echo $num2->par_ou_impar() . '<br>';
echo $num2->raiz_quadrada() . '<br>';
print_r($num2->tabuada());

echo '<hr>';

echo $num3->get_numero() . '<br>';
echo $num3->par_ou_impar() . '<br>';
echo $num3->raiz_quadrada() . '<br>';
print_r($num3->tabuada());

echo '<hr>';

echo $num4->get_numero() . '<br>';
echo $num4->par_ou_impar() . '<br>';
echo $num4->raiz_quadrada() . '<br>';
print_r($num4->tabuada());

echo '<hr>';