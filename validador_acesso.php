<?php
  session_start();
  // verifica se o usuario está autenticado ou se o usuario for diferente de true, retorna o erro e redireciona
  if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
    header("Location: index.php?login=erro2");
    exit;
  }