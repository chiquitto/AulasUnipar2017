<?php

class CategoriaDao {

  public function delete($idcategoria) {
    $con = Conexao::getInstance();

    $sql = 'Delete From categoria
    Where idcategoria = :idcategoria';
    $stmt = $con->prepare($sql);

    $stmt->bindValue(':idcategoria', $idcategoria);

    $stmt->execute();

    return true;
  }

  public function insert(Categoria $categoria) {
    $con = Conexao::getInstance();

    $sql = 'Insert Into categoria (categoria) Values (:categoria)';
    $stmt = $con->prepare($sql);

    $stmt->bindValue(':categoria', $categoria->getCategoria());
    $stmt->execute();

    $idcategoria = $con->lastInsertId();
    $categoria->setIdcategoria($idcategoria);

    return true;
  }

  public function selectAll() {
    $con = Conexao::getInstance();

    $sql = 'Select idcategoria, categoria From categoria';
    $stmt = $con->prepare($sql);

    $stmt->execute();

    $categorias = $stmt->fetchAll(PDO::FETCH_CLASS, "Categoria");

    return $categorias;
  }

  public function update(Categoria $categoria) {
    $con = Conexao::getInstance();

    $sql = 'Update categoria Set categoria = :categoria
    Where idcategoria = :idcategoria';
    $stmt = $con->prepare($sql);

    $stmt->bindValue(':categoria', $categoria->getCategoria());
    $stmt->bindValue(':idcategoria', $categoria->getIdcategoria());

    $stmt->execute();

    return true;
  }

}
