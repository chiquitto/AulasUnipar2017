<?php

require 'config.php';
require 'Conexao.php';

$con = Conexao::getInstance();

$sql = 'Select * From categoria';

// Sem prepared statement
$consulta = $con->query($sql);
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
	print_r($linha);

	$categoria = new Categoria();
	$categoria->setIdcategoria($linha['idcategoria']);
	$categoria->setCategoria($linha['categoria']);
}

// Com prepared statement
$stmt = $con->prepare($sql);
$stmt->execute();
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
	print_r($linha);
}
