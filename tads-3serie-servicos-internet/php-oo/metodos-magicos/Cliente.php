<?php

class Cliente {

  private $dataCriacao;
  private $nome;
  private $clonado = false;

  public function __construct($nome) {
    $this->dataCriacao = time();
    $this->nome = $nome;
  }

  public function __destruct() {
    //echo 'Destruindo objeto';
  }

  public function __call($nome, $args) {
    //print_r($args);
  }

  public function __get($nome) {
    if ($nome == 'idade') {
      return 18;
    }
    // print_r($nome);
  }

  public function __set($propriedade, $valor) {
    if ($propriedade == 'nome') {
      $this->nome = $valor;
    }
  }

  public function __isset($propriedade) {
    if ($propriedade == 'nome') {
      return isset($this->nome);
    }
    return false;
  }

  public function __unset($propriedade) {
    if ($propriedade == 'nome') {
      unset($this->nome);
    }
  }

  public function __toString() {
    return $this->dataCriacao . $this->nome;
  }

  public function __invoke() {
    return $this->__toString();
  }

  public function __clone() {
    $this->nome = strtoupper($this->nome);
    $this->clonado = true;
  }

  public function __debugInfo() {
    return array(
      'nome' => $this->nome,
      'dataCriacao' => $this->dataCriacao
    );
  }

}






//
