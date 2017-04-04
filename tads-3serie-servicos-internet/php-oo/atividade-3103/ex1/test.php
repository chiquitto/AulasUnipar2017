<?php

/*
Crie uma classe Retangulo com os atributos largura e altura, cada um dos quais assume o padrão de 1. Forneça os métodos que calculam o perímetro e a área do retângulo. A classe tem métodos set e get para a largura e altura. Os métodos set devem verificar se os valores são, cada um, números de ponto flutuante maiores que 0,0 e menores que 20,0. Escreva um programa para testar a classe Retangulo.
*/

require 'Retangulo.php';

$r = new Retangulo();

$r->setAltura(5);
$r->setLargura(10);

echo $r->calcularArea();
// echo $r->calcularPerimetro();

echo "\n";
