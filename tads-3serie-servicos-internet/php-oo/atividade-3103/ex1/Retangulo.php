<?php

class Retangulo {
  private $altura = 1;
  private $largura = 1;

  public function getAltura() {
    return $this->altura;
  }

  public function getLargura() {
    return $this->largura;
  }

  public function setAltura($altura) {
    $this->altura = $altura;
  }

  public function setLargura($largura) {
    $this->largura = $largura;
  }

  public function calcularArea() {
    return $this->altura * $this->largura;
  }

  public function calcularPerimetro() {
    return ($this->altura + $this->largura) * 2;
  }
}
