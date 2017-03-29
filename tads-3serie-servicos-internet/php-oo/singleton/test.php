<?php

require 'Conexao.php';

$conexao1 = Conexao::getInstance();
$conexao2 = Conexao::getInstance();

//$conexao3 = new Conexao();

$conexao4 = clone $conexao1;
