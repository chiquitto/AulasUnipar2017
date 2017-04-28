<?php

// Converte data de dd/mm/yyyy para yyyy-mm-dd

$dia = "15/05/2015";
// 2015-05-15

$pedacos = explode('/', $dia);

$pedacos = array(
  0 => $pedacos[2],
  1 => $pedacos[1],
  2 => $pedacos[0]
);

$data = implode('-', $pedacos);
echo $data;




//
