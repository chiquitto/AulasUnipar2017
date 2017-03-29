<?php

class Conexao {

  private static $instancia;

  public static function getInstance() {
    if (static::$instancia == null) {
      self::$instancia = new Conexao();
    }

    return self::$instancia;
  }

  private function __construct() {
    echo 'A';
  }

  public function __clone() {
    echo 'Perdeu preiboy. Nao pode instanciar.';
    exit;
  }

}
