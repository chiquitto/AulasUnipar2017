<?php

function enviarEmail() {
  $conexao = 1; // Conexao SMTP

  try {
    throw new Exception();

    // envio de email OK
    return true;
  } finally {
    // fechar conexao SMTP
    $conexao = 0;
    echo $conexao;
  }


}

try {
  enviarEmail();
} catch (Exception $e) {

}
