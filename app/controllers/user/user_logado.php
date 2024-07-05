<?php

session_start();

use app\models\User;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $user = new User;
    $userLogin = $user->find($email, $senha);
    $userLogin = $rows;

    if ($senha = $rows->senha) {
        $_SESSION['nome'] = $nome;
        echo "logado!";
        header('location: /');
    } else {
        echo "Não foi possível realizar o login, por favor verifique as informações!";
    }
}


// ideia para fazer o login do usuário
