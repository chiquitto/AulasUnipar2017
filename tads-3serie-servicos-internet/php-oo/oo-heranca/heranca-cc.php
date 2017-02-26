<?php

require 'Conta.php';
require 'ContaCorrente.php';

$conta = new ContaCorrente();
$conta->sacar(300);
$conta->sacar(300);

echo $conta->getSaldo();
