<?php

$frutas = array(
  'laranja',
  'abacate',
  'abacaxi',
  'caju',
  'morango'
);

/*
$ultimaPosicao = count($frutas) - 1;
for ($i = 0; $i <= $ultimaPosicao; $i++) {
  echo $frutas[$i];
}
*/

foreach ($frutas as $chave => $fruta) {
  echo $chave . $fruta . '-';
}


//
