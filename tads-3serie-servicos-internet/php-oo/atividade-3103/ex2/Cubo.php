<?php

class Cubo extends Forma3D {

  private $lado;

  public function getLado() {
    return $this->lado;
  }

  public function setLado($lado) {
    $this->lado = $lado;
  }

  public function calcularVolume() {
    return pow($this->lado, 3);
  }

}
