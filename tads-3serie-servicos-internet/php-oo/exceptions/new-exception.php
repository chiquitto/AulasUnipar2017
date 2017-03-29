<?php

function x($y) {
  if ($y < 0) {
    throw new BadMethodCallException('Y deve ser maior ou igual a 0', 1000);
  }

  throw new Exception('Excecao generica');
}

try {
  x(-1);
} catch (BadMethodCallException $e) {
  echo $e->getMessage();
} catch (Exception $e) {
  echo $e->getMessage();
}
