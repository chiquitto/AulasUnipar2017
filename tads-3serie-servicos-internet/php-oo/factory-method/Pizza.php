<?php

abstract class Pizza {
  public function prepararMassa() {
    // ações para preparar a massa
  }

  abstract public function rechear();

  public function assar() {
    // ações para assar a pizza
  }

  public function cortar() {
    // cortar em 8 pedaços
  }
}
