<h2>Cadastrar User</h2>

<div class="img_forms">
    <img class="img-form-1" src="../../assets/images/cake.png">

    <form id="form" class="colorful-form" method="post" action="/user_store">
        <div class="form-group">
            <label class="form-label" for="name">Name:</label>
            <input required="" placeholder="Insira seu nome" class="form-input" name="nome" id="name" type="text">
        </div>

        <div class="form-group">
            <label class="form-label" for="email">Email:</label>
            <input required="" placeholder="Insira seu email" class="form-input" name="email" id="email" type="email">
        </div>

        <div class="form-group">
            <label class="form-label" for="name">CPF:</label>
            <input required="" placeholder="Insira seu CPF" class="form-input" maxlength="11" name="cpf" id="CPF" type="number">
        </div>

        <div class="form-group">
            <label class="form-label" for="name">Senha:</label>
            <div class="inputwrapper">
                <input required="" placeholder="Senha" class="form-input" name="senha" id="senha" type="password" onchange="password()">
                <button class="eyebt" type="button" id="eye">
                    <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
                </button>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label" for="name">Confirme sua senha: </label>
            <input required="" placeholder="Confirme sua senha" class="form-input" id="pwd" type="password" onchange="password()">
            <div class="error" id="erro-senha">Senhas não coincidem </div>
        </div>
        <button onclick="logar()" class="form-button" type="submit">Cadastrar</button>
    </form>
</div>

<script src="/assets/js/scriptcad.js"></script>