<?php

require './config.php';
require PATH . '/Conexao.php';
require PATH . '/do/Categoria.php';
require PATH . '/dao/CategoriaDao.php';

$categoria = new Categoria();
$categoria->setCategoria('Filmes');

$categoriaDao = new CategoriaDao();
$categoriaDao->insert($categoria);

print_r($categoria);
