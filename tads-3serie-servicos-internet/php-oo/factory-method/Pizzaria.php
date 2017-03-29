<?php

class Pizzaria {

  const BACON = 'Bacon';
  const CALABRESA = 'Calabresa';

  public function factory($sabor) {
    $pizza = new $sabor();

    $pizza->prepararMassa();
    $pizza->rechear();
    $pizza->assar();
    $pizza->cortar();

    return $pizza;
  }

}



///
