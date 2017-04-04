<?php

/*
Utilizando os fundamentos de Herança, Polimorfismo e Encapsulamento criar uma estrutura de classes para formas geométricas 3D Cubo, Esfera, Cone e Cilindro. Todas as classes devem oferecem métodos get/set referentes aos valores necessárias para desenhar a forma geométrica. Por último, as classes devem oferecer um método para calcular o volume dos objetos.
*/

require 'Forma3D.php';
require 'Cubo.php';

$forma = new Cubo();
$forma->setLado(3);

echo $forma->calcularVolume();

echo "\n";
