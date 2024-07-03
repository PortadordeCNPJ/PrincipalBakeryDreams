<?php

session_start();

use app\models\User;

if (isset($_POST['login'])) {
    $value = $_POST['loginValue'];
    $password = $_POST['loginPassword'];

    $sql = "SELECT cod, username, senha FROM tb_usuarios WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $value, $value);
    $stmt->execute();
    $stmt->store_result();

    $user = new User;

    if ($user->num_rows > 0) {
        $user->bind_result($id, $username, $hashed_password);
        $user->fetch();

        if ($hashed_password = $password) {
            $_SESSION['username'] = $username;
        } else {
        }
    } else {
    }

    $stmt->close();
    $conn->close();
}

// ideia para fazer o login do usuário

$userLogin = $user->find($email, $senha);
