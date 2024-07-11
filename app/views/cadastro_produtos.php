<h2>Cadastro de Produtos</h2>



<img class="img-for" src="./assets/img/cake.png">

<form id="form" class="colorful-form" method="post" action="/castro_produtos">

    <div class="form-group">
        <label class="form-label" for="name">Nome:</label>
        <input required="" placeholder="Insira o nome do produto" class="form-input" name="nome" id="name" type="text">
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

    <!-- Fazer um if que vai verificar o tipo do produto e vai com base nele, cadastrar no campo correto -->

    <div class="form-group">
        <label class="form-label" for="gluten">Tipo do Produto:</label>

        <select>
            <?php foreach ($tipoProdutos as $tipoProduto) :
            ?>
                <option selected name="<?= $tipoProduto->id_tipoproduto ?>"><?= $tipoProduto->tipoproduto ?></option>;
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Sabor:</label>
        <input required="" placeholder="Insira o sabor" class="form-input" name="gluten" id="pwd" type="text" onchange="password()">
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Amendoim:</label>
        <input required="" placeholder="Tem Amendoim" class="form-input" name="gluten" id="pwd" type="text" onchange="password()">
    </div>

    <button class="form-button" type="submit">Cadastrar</button>
</form>