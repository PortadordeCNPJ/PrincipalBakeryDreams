<h2>Cadastrar Endereço para entrega</h2>

<div class="img_forms">
    <img class="img-form-1" src="../../assets/images/cake.png">

    <form id="form" class="colorful-form" method="post" action="/confirm_purchase_store">
        <input type="hidden" name="id_usuario" value="<?php echo $_SESSION["id_usuario"]; ?>">
        <div class="form-group">
            <label class="form-label" for="name">Telefone:</label>
            <input required="" placeholder="Insira seu Telefone" class="form-input" name="fone" id="fone" type="text">
        </div>

        <div class="form-group">
            <label class="form-label" for="email">Data de nascimento:</label>
            <input required="" placeholder="Insira sua data de nascimento" class="form-input" name="dt_nasc" id="date" type="date">
        </div>

        <div class="form-group">
            <label class="form-label" for="name">Rua:</label>
            <input required="" placeholder="Insira sua rua" class="form-input" name="rua" id="rua" type="text">
        </div>

        <div class="form-group">
            <label class="form-label" for="name">Bairro:</label>
            <input required="" placeholder="Insira seu Bairro" class="form-input" name="bairro" id="bairro" type="text">
        </div>

        <div class="form-group">
            <label class="form-label" for="name">Número da casa:</label>
            <input required="" placeholder="Insira seu número da casa" class="form-input" name="nmcasa" id="rua" type="text">
        </div>

        <div class="form-group">
            <label class="form-label" for="name">Complemento:</label>
            <input required="" placeholder="Insira o complemento" class="form-input" name="complemento" id="complemento" type="text">
        </div>

        <button class="form-button" type="submit">Cadastrar</button>
    </form>
</div>
