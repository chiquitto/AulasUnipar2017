<?php

$frutas = array(
  1 => 'laranja',
  'abacate',
  5 => 'abacaxi',
  4 => 'caju',
  -1 => 'morango'
);

/*
$ultimaPosicao = count($frutas);
for ($i = 1; $i <= $ultimaPosicao; $i++) {
  echo $frutas[$i];
}
*/

foreach ($frutas as $chave => $fruta) {
  echo $chave . $fruta . '-';
}


//
