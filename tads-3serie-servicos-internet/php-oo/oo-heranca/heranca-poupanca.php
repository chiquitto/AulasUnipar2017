<?php

require 'Conta.php';
require 'Poupanca.php';

$conta = new Poupanca();
$conta->calcularJuros();

echo $conta->getSaldo() . '<br>';

$conta->depositar(300);

echo $conta->calcularJuros() . '<br>';
echo $conta->getSaldo() . '<br>';

echo $conta->calcularJuros() . '<br>';
echo $conta->getSaldo() . '<br>';








/**/
