<?php

$timestamp = mktime(0,0,0,6,15,1980);
$timestamp = strtotime('next Sunday', $timestamp);

echo date('d/m/Y H:i:s', $timestamp);


//
