<?php
    session_start();

    // variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuario');

    // usuarios do sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '12345', 'perfil_id' => 2),
    );

    foreach($usuarios_app as $user) {

        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
            $_SESSION['usuario'] = $user['email'];  // Armazena o e-mail do usuário na sessão
            break;  // Interrompe o loop após encontrar o usuário
        }
    }

    if($usuario_autenticado) {
        $_SESSION['autenticado'] = true;
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
        exit; // Garante que o script não continue executando
    } else {
        $_SESSION['autenticado'] = false;
        header('Location: index.php?login=erro');
        exit; // Garante que o script não continue executando
    }
    