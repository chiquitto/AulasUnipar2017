<?php

require 'Pessoa.php';
require 'Fisica.php';
require 'Juridica.php';
require 'ReceitaFederal.php';

$pessoa = new Juridica();
$pessoa->nome = 'Unipar';
// $pessoa->validarDoc('13254645-55');

$rec = new ReceitaFederal();
$rec->imprimirSituacao($pessoa);
