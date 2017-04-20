<?php

require './config.php';
require PATH . '/Conexao.php';
require PATH . '/do/Categoria.php';
require PATH . '/dao/CategoriaDao.php';

$categoria = new Categoria();
$categoria->setIdcategoria(5);
$categoria->setCategoria('Desenhos');

$categoriaDao = new CategoriaDao();
$categoriaDao->update($categoria);

print_r($categoria);
