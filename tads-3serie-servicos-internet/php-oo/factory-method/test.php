<?php

require 'Pizza.php';
require 'Bacon.php';
require 'Calabresa.php';
require 'Pizzaria.php';

/*
$pizza = new Calabresa();
$pizza->prepararMassa();
$pizza->rechear();
$pizza->assar();
$pizza->cortar();
*/

$pizzaria = new Pizzaria();

$bacon = $pizzaria->factory(Pizzaria::CALABRESA);





//
