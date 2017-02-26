<?php

require 'Carro.php';
require 'Proprietario.php';

$proprietario = new Proprietario();
$proprietario->nome = 'Jo Soares';

$carro = new Carro();
$carro->marca = 'Ford';
$carro->modelo = 'Focus';
//$carro->potencia = '2.0';
$carro->cor = 'Vermelho';
$carro->setProprietario($proprietario);

$carro->escrever();





/**/
