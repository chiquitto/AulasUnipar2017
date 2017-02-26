<?php

class Carro {
  public $cor;
  public $potencia = '1.0';
  public $marca;
  public $modelo;

  public $proprietario;

  public function escrever() {
    echo 'Eu ' . $this->proprietario->nome . ' tenho um carro ' . $this->marca . ' ' . $this->modelo . ' ' . $this->potencia . ' ' . $this->cor . "<br>";
  }

  public function setProprietario(Proprietario $proprietario) {
    // if ($proprietario instanceof Proprietario) {}
    $this->proprietario = $proprietario;
  }
}




/**/
