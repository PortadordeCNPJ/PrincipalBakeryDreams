<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $to = "contato@bakerydreams.com";
    $subject = "Novo Contato de $nome";
    $body = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if ($to == "contato@bakerydreams.com") {
        echo "<script>alert('Sua mensagem foi enviada!');</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem!');</script>";
    }
}
?>

<!-- Banner de Contato -->
<section class="banner">
    <h1 class="banner-title">Fale Conosco</h1>
    <p class="banner-text">Tem alguma dúvida ou deseja fazer um pedido? Entre em contato conosco!</p>
</section>

<!-- Container Principal -->
<div class="container">
    <!-- Seção de Informações de Contato -->
    <section class="contact-section">
        <h2 class="section-title">Informações de Contato</h2>
        <div class="contact-info">
            <p class="contact-item"><strong>Endereço:</strong> Rua dos Doces, 123 - Centro, Cidade Doce</p>
            <p class="contact-item"><strong>Telefone:</strong> (11) 1234-5678</p>
            <p class="contact-item"><strong>Email:</strong> contato@bakerydreams.com</p>
        </div>
    </section>

    <!-- Seção de Formulário de Contato -->
    <section class="form-section">
        <h2 class="section-title">Envie uma Mensagem</h2>
        <form class="contact-form" action="" method="post">
            <input class="form-input" type="text" name="nome" placeholder="Seu Nome" required>
            <input class="form-input" type="email" name="email" placeholder="Seu Email" required>
            <input class="form-input" type="text" name="telefone" placeholder="Seu Telefone">
            <textarea class="form-textarea" name="mensagem" rows="5" placeholder="Sua Mensagem" required></textarea>
            <button class="form-button" type="submit">Enviar Mensagem</button>
        </form>
    </section>
</div>