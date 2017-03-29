<?php

$produto = array(
  'id' => 10,
  'preco' => 59.90,
  'descricao' => 'Mouse',
  'cor' => 'Preto'
);

foreach ($produto as $chave => $valor) {
  echo $chave . '=' . $valor . '-';
}


//
