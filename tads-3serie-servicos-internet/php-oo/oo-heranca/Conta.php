<?php

class Conta {
  private $saldo = 0;

  public function getSaldo() {
    return $this->saldo;
  }

  public function sacar($valor) {
    $this->saldo -= $valor;
  }

  public function depositar($valor) {
    $this->saldo += $valor;
  }
}
