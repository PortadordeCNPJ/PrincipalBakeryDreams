<?php

use app\models\User;

if (empty($_POST) or (empty($_POST["email"])) or (empty($_POST["senha"]))) {
    echo "<script>alert('Usuario ou senha não encontros');</script>";
    header('location: /');
} else {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $user = new User;
    $emailUser = $user->find('email', $email);
    $emailLogado = $emailUser->email;
    $senhaUser = $user->find('senha', $senha);
    $senhaLogado = $emailUser->senha;
    $ativoLogado = $emailUser->ativo;
    // dd($emailUser);

    if ($ativoLogado == "S") {
        if ($emailLogado == $email && $senhaLogado == $senha) {
            $_SESSION['email'] = $emailUser->email;
            $_SESSION['nome'] = $emailUser->nome;
            $_SESSION['tipo'] = $emailUser->tipo;
            $_SESSION['id_usuario'] = $emailUser->id_usuario;
            echo "<script>alert('Usuário logado!');</script>";

            if ($_SESSION['tipo'] == "U") {
                $layout->add('home');
            } else {
                $layout_adm->add('admin');
            }
        } else {
            echo "<script>alert('Usuario ou senha não encontrados!');</script>";
            echo "<script>location.href='/user/user_login';</script>";
        }
    } else {
        echo "<script>alert('Usuario está inativo, contate um administrator');</script>";
        echo "<script>location.href='/user/user_login';</script>";
    }
}


// ideia para fazer o login do usuário
