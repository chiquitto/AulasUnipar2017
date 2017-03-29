<?php

$i = 0;

/*while ($i < 50) {
  echo $i;
  $i += 5;
}*/

while ($i < 50) {
  if ($i % 5 == 0) {
    echo $i;
  }
  $i++;
}
