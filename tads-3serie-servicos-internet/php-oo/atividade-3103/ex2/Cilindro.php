<?php

class Cilindro extends Forma3D {

  private $altura;
  private $raio;

  public function getAltura() {
    return $this->altura;
  }

  public function setAltura($altura) {
    $this->altura = $altura;
  }

  public function getRaio() {
    return $this->raio;
  }

  public function setRaio($raio) {
    $this->raio = $raio;
  }

  public function calcularVolume() {
    return static::PI * pow($this->raio, 2) * $this->altura;
  }

}
