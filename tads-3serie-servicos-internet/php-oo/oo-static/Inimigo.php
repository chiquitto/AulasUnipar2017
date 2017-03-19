<?php

class Inimigo {
  public $nome;
  private static $qtd = 0;

  public function __construct($nome) {
    $this->nome = $nome;

    static::$qtd++;
  }

  public static function getQtd() {
    return static::$qtd;
  }
}








//
