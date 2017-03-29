<?php

function sqrt2($x) {
  if ($x < 0) {
    throw new ArithmeticError();
  }
  return sqrt($x);
}

sqrt2(-9);
