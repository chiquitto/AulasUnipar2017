<?php

class Quadrado extends Figura {
  private $base = 0;

  public function __construct($lado) {
    $this->base = $lado;
  }

  public function perimetro () {
    return $this->base * 4;
  }

  public function area() {
    return $this->base * $this->base;
  }
}
