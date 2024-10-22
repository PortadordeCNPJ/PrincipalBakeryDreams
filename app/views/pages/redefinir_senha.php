<!-- Formulário de redefinição de senha -->
<form action="/pages/redefinir_senha_validation" method="POST">
    <input type="hidden" name="token" value="<?php $token ?>">
    <input type="password" name="senha" placeholder="Nova senha" required>
    <input type="password" name="confirmar_senha" placeholder="Confirmar nova senha" required>
    <button type="submit">Redefinir Senha</button>
</form>
