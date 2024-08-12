<?php
    session_start();

    // variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    // usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => '123'),
    );

    foreach($usuarios_app as $user) {

        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $_SESSION['usuario'] = $user['email'];  // Armazena o e-mail do usuário na sessão
            break;  // Interrompe o loop após encontrar o usuário
        }
    }

    if($usuario_autenticado) {
        $_SESSION['autenticado'] = true;
        header('Location: home.php');
        exit; // Garante que o script não continue executando
    } else {
        $_SESSION['autenticado'] = false;
        header('Location: index.php?login=erro');
        exit; // Garante que o script não continue executando
    }
    