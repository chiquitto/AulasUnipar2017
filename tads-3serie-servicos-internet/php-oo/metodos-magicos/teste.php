<?php

require 'Cliente.php';

$cliente = new Cliente('alisson');

$cliente->andar('10km', '5km/h');

// echo $cliente->idade;
$cliente->nome = 'Chiquitto';

//$retorno = isset($cliente->nome);
//var_dump($retorno);

//unset($cliente->nome);

//var_dump($cliente);

//echo $cliente();

$cliente2 = clone $cliente;

var_dump($cliente);
var_dump($cliente2);









//
