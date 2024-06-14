<h2>Cadastrar User</h2>
<img class="img-for" src="./assets/img/cake.png">

<form id="form" class="colorful-form" method="post" action="/castro_produtos">
    <div class="form-group">
        <label class="form-label" for="name">Nome:</label>
        <input required="" placeholder="Insira seu nome" class="form-input" name="nome" id="name" type="text">
    </div>

    <div class="form-group">
        <label class="form-label" for="descricao">Descrição do produto:</label>
        <input required="" placeholder="Insira a descrição do produto" class="form-input" name="descricao" id="email" type="text">
    </div>

    <div class="form-group">
        <label class="form-label" for="valor">valor:</label>
        <input required="" placeholder="Insira o valor do produto" class="form-input" maxlength="11" name="valor" id="CPF" type="number">
    </div>

    <div class="form-group">
        <label class="form-label" for="imagem">imagem:</label>
        <input required="" placeholder="Insira a imagem" class="form-input" name="imagem" id="senha" type="text">
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Sabor:</label>
        <input required="" placeholder="Insira o sabor" class="form-input" name="gluten" id="pwd" type="text" onchange="password()">
    </div>

    <div class="form-group">
        <!-- <label class="form-label" for="gluten">Produto contem gluten:</label>

        <input required="" placeholder="" name="sim" id="gluten" type="checkbox">
        <label for="sim">Sim</label>
        <input required="" placeholder="" name="nao" id="gluten" type="checkbox">
        <label for="nao">Não</label> -->

        <span class="form-label"> Período: </span>
        <div class="inf-radio">
            <div class="radio-input">
                <label for="sim">sim</label>
                <label for="nao">não</label>
            </div>
            <div class="radio-input">
                <input type="radio" name="periodo" value="1" id="matutino" class="radio">
                <input type="radio" name="periodo" value="2" id="vespertino" class="radio">
            </div>
        </div>
    </div>
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Amendoim:</label>
        <input required="" placeholder="Tem Amendoim" class="form-input" name="gluten" id="pwd" type="text" onchange="password()">
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Tipo salgado:</label>
        <input required="" placeholder="Tem cluten" class="form-input" name="gluten" id="pwd" type="text" onchange="password()">
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Tipo Doce:</label>
        <input required="" placeholder="Tem cluten" class="form-input" name="gluten" id="pwd" type="text" onchange="password()">
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Tipo do Produto:</label>
        <input required="" placeholder="" class="form-input" name="gluten" id="pwd" type="text" onchange="password()">
    </div>

    <!-- <button onclick="logar()" class="form-button" type="submit">Cadastrar</button> -->
</form>

<script src="assets/js/scriptcad.js"></script>