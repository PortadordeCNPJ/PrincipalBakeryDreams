<?php
if (!empty($_SESSION)) {
    echo '<div class="img-forms">
            <img class="img-form-2" src="../../assets/images/cake2.png">
                <form id="form" class="colorful-form" method="POST" action="/user_logado">
                    <div class="form-group">
                        <div class=""> Bem vindo,'. $_SESSION['nome'] .'! </div>
                    </div>
                <button class="form-button" type="submit">Enviar </button>
                </form>
         </div>';
} else {

?>
    <div class="img-forms">
        <img class="img-form-2" src="../../assets/images/cake2.png">
        <form id="form" class="colorful-form" method="POST" action="/user_logado">

            <div class="form-group">
                <label class="form-label" for="email">Email:</label>
                <input required="" placeholder="Insira seu email" class="form-input" name="email" id="email" type="email">
            </div>
            <div class="form-group">
                <label class="form-label" for="name">Senha:</label>
                <input min="5" required="" placeholder="Insira sua senha" class="form-input" name="senha" id="senha" type="password">
            </div>
            <a href="/pages/esqueceu_senha" class="">Esqueceu a senha</a>
            <button class="form-button" type="submit">Enviar </button>
        </form>
    </div>
<?php

}
?>