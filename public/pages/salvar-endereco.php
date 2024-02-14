<?php session_start() ?>

<div class="img-forms">
    <img class="img-for" src="./assets/img/cake.png">

    <form id="form" class="colorful-form" method="post" action="?page=#">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="form-group">
            <label class="form-label" for="rua">Rua:</label>
            <input required="" placeholder="Insira o nome da Rua" class="form-input" name="rua" id="name" type="text">
        </div>

        <div class="form-group">
            <label class="form-label" for="Endereco">Endereco:</label>
            <input required="" placeholder="Insira o Endereço" class="form-input" name="email" id="email" type="text">
        </div>

        <div class="form-group">
            <label class="form-label" for="Bairro">Bairro:</label>
            <input required="" placeholder="Insira seu Bairro" class="form-input" maxlength="11" name="cpf" id="CPF" type="text">
        </div>

        <div class="form-group">
            <label class="form-label" for="numero">Número da Casa:</label>
            <div class="inputwrapper">
                <input required="" placeholder="Senha" class="form-input" name="senha" id="senha" type="number">
            </div>
        </div>

        <div class="form-group">
            <label class="form-label" for="name">Refência sobre a casa: </label>
            <input required="" placeholder="Refência sobre a casa:" class="form-input" name="pwd" id="pwd" type="text" >
        </div>


        <button onclick="logar()" class="form-button" type="submit">Cadastrar</button>
    </form>

</div>

<script src="assets/js/scriptcad.js"></script>