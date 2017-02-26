<?php

require 'Produto.php';
require 'Loja.php';

$loja = new Loja();

$produto1 = new Produto();
$produto1->id = 1;
$produto1->preco = 10;

$produto2 = new Produto();
$produto2->id = 2;
$produto2->preco = 20;

$produto3 = new Produto();
$produto3->id = 3;
$produto3->preco = 30;

$loja->vender($produto1);
$loja->vender($produto2, 2);
$loja->vender($produto3, 1, 10);


print_r($loja);



/**/
