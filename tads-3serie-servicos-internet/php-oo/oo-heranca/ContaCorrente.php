<?php

class ContaCorrente extends Conta {
  private $limite = 500;

  public function sacar($valor) {
    $podeSacar = $this->getSaldo() + $this->limite;
    if ($valor > $podeSacar) {
      echo 'Erro';
      exit;
    }
    parent::sacar($valor);
  }
}
