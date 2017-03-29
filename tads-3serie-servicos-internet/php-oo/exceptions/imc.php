<?php

class AlturaException extends Exception {}
class PesoException extends Exception {}

function imc($altura, $peso) {
  if ($altura <= 0) {
    throw new AlturaException("Altura deve ser maior que 0", 1);
  }
  if ($peso <= 0) {
    throw new PesoException("Peso deve ser maior que 0", 1);
  }

  $altura2 = $altura * $altura;
  $imc = $peso / $altura2;
  return $imc;
}

try {
  echo imc(1.7, 0);
} catch (AlturaException $e) {
  echo 'A altura informada e invalida';
} catch (PesoException $e) {
  echo 'O peso informado e invalido';
}

/*catch (Exception $e) {
  if ($e->getCode == 1) {
    echo 'Informe a sua altura em metros';
  } else if ($e->getCode() == 2) {
    echo 'Informe o seu peso em KG';
  }
}*/





///
