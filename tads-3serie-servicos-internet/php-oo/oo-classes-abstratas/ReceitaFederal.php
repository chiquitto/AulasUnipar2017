<?php

class ReceitaFederal {
  public function imprimirSituacao(Pessoa $p) {
    $p->validarDoc('8777779797-11');
    echo $p->getNome();
  }
}
