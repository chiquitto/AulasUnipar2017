<?php

require 'Figura.php';
require 'Quadrado.php';
require 'Triangulo.php';
require 'Circulo.php';

$f = new Circulo(3);

echo "Perimetro: " . $f->perimetro();
echo '<br>';
echo 'Area: ' . $f->area();
