<?php

$i = 0;

while ($i < 50) {
  if ($i % 5 == 0) {
    echo $i;
  }
  $i++;

  if ($i == 26) {
    break;
  }
}
