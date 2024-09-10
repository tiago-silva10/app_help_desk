<?php
    //$session_start();

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $resultado = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    $arquivo = fopen('arquivo.hd', 'a');

    fwrite($arquivo, $resultado);

    fclose($arquivo);

    header('Location: abrir_chamado.php');
    