<?php

class Triangulo extends Figura {
  private $base = 0;
  private $altura = 0;

  public function __construct($base, $altura) {
    $this->base = $base;
    $this->altura = $altura;
  }

  public function perimetro() {
    return $this->base * 3;
  }

  public function area() {
    return $this->base * $this->altura / 2;
  }
}



/**/
