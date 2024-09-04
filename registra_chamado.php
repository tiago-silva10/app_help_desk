<?php

    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $resultado = $titulo . ' ' . $categoria . ' ' . $descricao . PHP_EOL;

    $arquivo = fopen('arquivo.hd', 'a');

    fwrite($arquivo, $resultado);

    fclose($arquivo);
    