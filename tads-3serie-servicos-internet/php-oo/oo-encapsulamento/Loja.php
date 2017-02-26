<?php

class Loja {
  private $caixa = 0;

  public function vender(Produto $produto, $qtd = 1, $desconto = 0) {
    $valor = $qtd * $produto->preco;
    if (($desconto > 0) and ($desconto <= 20)) {
      // 500 * 10 = 5000 / 100 = 50
      $valor -= $valor * $desconto / 100;
    }
    $this->caixa += $valor;
  }
}
