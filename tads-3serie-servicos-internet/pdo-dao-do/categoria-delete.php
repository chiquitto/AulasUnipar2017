<?php

require './config.php';
require PATH . '/Conexao.php';
require PATH . '/do/Categoria.php';
require PATH . '/dao/CategoriaDao.php';

$categoriaDao = new CategoriaDao();
$categoriaDao->delete(5);
