<?php

use app\models\User;

$user = new User;

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verificar se o token é válido e ainda não expirou
    $query = "SELECT * FROM tb_usuarios WHERE token = ? AND token_validade > NOW()";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(1, $token, PDO::PARAM_STR);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    $user = 

    if ($usuario) {
        // Se o token for válido, exibe o formulário para redefinir a senha
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nova_senha =  md5($_POST['senha']);    
            $confirmar_senha = md5($_POST['confirmar_senha']);

            if ($nova_senha === $confirmar_senha) {
                // Criptografa a nova senha
                $senha_criptografada = password_hash($nova_senha, PASSWORD_DEFAULT);

                // Atualiza a senha no banco de dados e remove o token
                $query = "UPDATE tb_usuarios SET senha = :senha, token = NULL, token_validade = NULL WHERE codusuario = :codusuario";
                $stmt = $pdo->prepare($query);
                $stmt->bindParam(1, $senha_criptografada, PDO::PARAM_STR);
                $stmt->bindParam(2, $usuario['codusuario'], PDO::PARAM_INT);
                $stmt->bindParam(':senha', $nova_senha, PDO::PARAM_STR);
                $stmt->execute();

                echo "<script>alert('Sua senha foi redefinida com sucesso!');</script>";
                echo "<script>location.href='paginalogin.php';</script>";
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
?>

<!-- Formulário de redefinição de senha -->
<form action="" method="POST">
    <input type="password" name="senha" placeholder="Nova senha" required>
    <input type="password" name="confirmar_senha" placeholder="Confirmar nova senha" required>
    <button type="submit">Redefinir Senha</button>
</form>
