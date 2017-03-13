<?php

abstract class Pessoa {
  public $nome;

  abstract public function validarDoc($doc);

  public function getNome() {
    return $this->nome;
  }
}
