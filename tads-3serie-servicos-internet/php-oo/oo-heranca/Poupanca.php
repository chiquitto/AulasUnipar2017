<?php

class Poupanca extends Conta {
  private $juros = 1;

  public function calcularJuros() {
    $saldo = $this->getSaldo();
    // 1 / 100 = 0.01 * 100 = 1
    $juros = $this->juros / 100 * $saldo;

    $this->depositar($juros);

    return $juros;
  }
}
