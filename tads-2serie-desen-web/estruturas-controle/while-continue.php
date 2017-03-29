<?php

$i = 0;

while ($i < 50) {
  $i++;

  if ($i % 2 == 1) {
    continue;
  }

  echo "$i-";
}
