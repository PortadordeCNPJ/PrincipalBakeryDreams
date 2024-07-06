<?php

use app\models\User;

if (empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))) {
    echo "<script>alert('Usuario ou senha não encontros');</script>";
    header('location: /');
} else {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $user = new User;
    $userLogado = $user->all();

    if ($userLogado->email == $email && $userLogado->senha == $senha) {
        $_SESSION['nome'] = $userLodago->nome;
        $_SESSION['tipo'] = $userLodago->tipo;
        echo "logado!";
        header('location: /');
    } else {
        echo "Não foi possível realizar o login, por favor verifique as informações!";
    }
}


// ideia para fazer o login do usuário
