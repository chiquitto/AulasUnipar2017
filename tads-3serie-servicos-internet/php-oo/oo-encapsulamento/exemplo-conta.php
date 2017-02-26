<?php

require 'Conta.php';

$conta = new Conta();

$conta->depositar(500);
$conta->depositar(-200);

$conta->sacar(300);
$conta->sacar(300);

echo $conta->getSaldo();

//print_r($conta);
