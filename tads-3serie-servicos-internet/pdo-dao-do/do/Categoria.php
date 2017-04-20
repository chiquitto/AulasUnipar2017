<?php

class Categoria {

  private $idcategoria;
  private $categoria;

  public function getIdcategoria() {
    return $this->idcategoria;
  }

  public function getCategoria() {
    return $this->categoria;
  }

  public function setIdcategoria($idcategoria) {
    $this->idcategoria = $idcategoria;
  }

  public function setCategoria($categoria) {
    $this->categoria = $categoria;
  }

}
