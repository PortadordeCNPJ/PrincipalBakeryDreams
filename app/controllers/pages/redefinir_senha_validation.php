<?php

use app\models\User;

$user = new User;

if (isset($_POST['token'])) {
    $token = $_POST['token'];

    // Verificar se o token é válido e ainda não expirou
    // $query = "SELECT * FROM tb_usuarios WHERE token = ? AND token_validade > NOW()";
    // $stmt = $pdo->prepare($query);
    // $stmt->bindParam(1, $token, PDO::PARAM_STR);
    // $stmt->execute();
    // $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    $userToken = $user->tokenExpire($token);

    if ($userToken) {
        // Se o token for válido, exibe o formulário para redefinir a senha
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nova_senha =  md5($_POST['senha']);    
            $confirmar_senha = md5($_POST['confirmar_senha']);

            if ($nova_senha === $confirmar_senha) {

                // Atualiza a senha no banco de dados e remove o token
                $user->updateResetPassword($nova_senha, $userToken);

                echo "<script>alert('Sua senha foi redefinida com sucesso!');</script>";
                echo "<script>location.href='/user/user_login';</script>";
            } else {
                echo "As senhas não coincidem. Tente novamente.";
            }
        }
    } else {
        echo "Link inválido ou expirado!";
    }
} else {
    echo "Token não fornecido!";
}