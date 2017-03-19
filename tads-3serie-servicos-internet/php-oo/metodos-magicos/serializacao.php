<?php

require 'Cliente.php';

$valor = new Cliente('Unipar');

$serializado = serialize($valor);

echo $serializado . '/<br>';

var_dump(unserialize($serializado));
