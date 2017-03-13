<?php

require 'Animal.php';
require 'Mamifero.php';
require 'Ave.php';
require 'Voador.php';
require 'Cavalo.php';
require 'Morcego.php';
require 'Pato.php';
require 'Pinguim.php';
require 'Pomba.php';

$animal = new Pomba();

if ($animal instanceof Mamifero) {
  echo "Mamifero,";
}
if ($animal instanceof Ave) {
  echo "Ave,";
}
if ($animal instanceof Voador) {
  $animal->voar();
}





//
