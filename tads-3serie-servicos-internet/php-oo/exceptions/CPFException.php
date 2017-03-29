<?php

class CPFException extends Exception {
  public $cpf;
}

$e = new CPFException();
$e->cpf = '38475983479';
throw $e;
