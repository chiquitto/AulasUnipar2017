<?php

class Circulo extends Figura {
  const PI = 3.1415;
  private $raio = 0;

  public function __construct($raio) {
    $this->raio = $raio;
  }

  public function perimetro() {
    return self::PI * $this->raio * 2;
  }

  public function area() {
    //return self::PI * $this->raio * $this->raio;
    return self::PI * pow($this->raio, 2);
  }
}
