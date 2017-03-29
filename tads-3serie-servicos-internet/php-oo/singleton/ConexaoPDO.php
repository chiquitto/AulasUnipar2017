<?php

class ConexaoPDO extends PDO {

  private static $instancia;

  public static function getInstance() {
    if (static::$instancia == null) {
      self::$instancia = new Conexao('mysql:dbname=aula;host=localhost');
    }

    return self::$instancia;
  }

  public function __clone() {
    echo 'Perdeu preiboy. Nao pode instanciar.';
    exit;
  }

}
