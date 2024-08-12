<?php
    session_start();
    echo '<pre>';
    print_r($_SESSION);
    // remover indices o array de seção
    //unset() espera que o array e indice seja eliminado
    unset($_SESSION['autenticado']);
    header('Location: index.php');
    //destruir a variavel de seção
    // session_destroy()

?>