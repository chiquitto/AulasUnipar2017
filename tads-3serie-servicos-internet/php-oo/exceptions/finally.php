<?php

function enviarEmail() {
  $conexao = 1; // Conexao SMTP

  try {
    // tentar enviar email

    // envio de email OK
    return true;
  } catch (Exception $e) {
    return false;
  } finally {
    // fechar conexao SMTP
    $conexao = 0;
    echo $conexao;
  }


}

enviarEmail();
