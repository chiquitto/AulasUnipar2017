<?php

class Conta {
  private $saldo = 0;

  public function getSaldo() {
    return $this->saldo;
  }

  public function depositar($valor) {
    if ($valor > 0) {
      $this->saldo += $valor;
    }
  }

  public function sacar($valor) {
    if (($valor > 0) and ($valor <= $this->saldo)) {
      $this->saldo -= $valor;
    }
  }
}








/**/
