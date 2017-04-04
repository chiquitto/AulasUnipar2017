<?php

class Esfera extends Forma3D {

  private $raio;

  public function getRaio() {
    return $this->raio;
  }

  public function setRaio($raio) {
    $this->raio = $raio;
  }

  public function calcularVolume() {
    return (4 * static::PI * pow($this->raio, 3)) / 3;
  }

}
