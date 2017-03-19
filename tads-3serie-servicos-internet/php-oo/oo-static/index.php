<?php

//require 'Matematica.php';
require 'Inimigo.php';

//echo Matematica::soma(5,10);
//echo Matematica::PI;
//echo Matematica::$pi;

$coringa = new Inimigo('Coringa');
$loki = new Inimigo('Loki');
$zecaUrubu = new Inimigo('Zeca Urubu');
$freeza = new Inimigo('Freeza');
$cell = new Inimigo('Cell');

echo Inimigo::getQtd();





/**/
