<?php

use app\models\User;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

// Função para enviar e-mail
function enviarEmail($email, $assunto, $mensagemHTML, $mensagemTexto)
{
    $mail = new PHPMailer(true);
    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = 'guilhermedesouzamuller@gmail.com'; // Substitua pelo seu e-mail SMTP
        $mail->Password = 'jckq uvvn vkjg mswr';             // Substitua pela sua senha SMTP
        $mail->SMTPSecure = 'tls';             // Use 'tls' ou 'ssl' conforme seu provedor
        $mail->Host = 'smtp.gmail.com';        // Substitua pelo servidor SMTP correto
        $mail->Port = 587;                     // Porta TLS

        // Configurações do e-mail
        $mail->setFrom('guilhermedesouzamuller@gmail.com', 'Sua Empresa ou Nome'); // Substitua pelo seu e-mail
        $mail->addAddress($email);                                  // Destinatário

        $mail->isHTML(true);                                        // Formato HTML
        $mail->Subject = $assunto;                                  // Assunto do e-mail
        $mail->Body    = $mensagemHTML;                             // Corpo do e-mail em HTML
        $mail->AltBody = $mensagemTexto;                            // Alternativa para clientes sem suporte HTML

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

$user = new User;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Verifique se o e-mail existe no banco de dados
    // $sql = "SELECT * FROM tb_usuarios WHERE email = :email";
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindParam(1, $email, PDO::PARAM_STR);
    // $stmt->execute();
    // $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $emailUser = $user->find('email', $email);
    $emailCorrect = $emailUser->email;
    // $stmt->bindParam(1, $email, PDO::PARAM_STR);
    // $stmt->execute();

    if ($emailCorrect) {
        // Gera um token seguro
        $token = bin2hex(random_bytes(50));
        $user->updateRecuperacaoSenha($emailCorrect, $token);
        
        // Armazena o token e a validade no banco de dados
        

        // Gera o link de redefinição de senha
        $link = "http://localhost/Tcc%20Site/redefinir_senha.php?token=$token";
        $assunto = "Redefinir sua senha";
        $mensagemHTML = "Clique no link para redefinir sua senha: <a href='$link'>$link</a>";
        $mensagemTexto = "Clique no link para redefinir sua senha: $link";

        // Envie o e-mail usando PHPMailer
        if (enviarEmail($email, $assunto, $mensagemHTML, $mensagemTexto)) {
            echo "<script>alert ('Um link de redefinição de senha foi enviado para o seu e-mail.');</script>";
            header("Location: confirmacao.php");
            //echo "<script>location.href='redefinir_senha.php?token$token';</script>";
        } else {
            echo "Erro ao enviar o e-mail. Tente novamente.";
        }
    } else {
        echo "E-mail não encontrado!";
    }
}
?>

<form action="" method="POST">
    <input type="email" name="email" placeholder="Digite seu e-mail" required>
    <button type="submit">Recuperar Senha</button>
</form>