<?php

require './config.php';
require PATH . '/Conexao.php';
require PATH . '/do/Categoria.php';
require PATH . '/dao/CategoriaDao.php';

$categoriaDao = new CategoriaDao();

$categorias = $categoriaDao->selectAll();

print_r($categorias);
