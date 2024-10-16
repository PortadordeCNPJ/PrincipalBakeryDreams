<h2>Cadastro de Produtos</h2>

<img class="img-form-1" src="../../assets/img/cake.png">

<form id="form" class="colorful-form" method="post" action="/products_update">
    <input type="hidden" name="id_produto" value="<?= $productsFound->id_produto ?>">
    <div class="form-group">
        <label class="form-label" for="name">Nome:</label>
        <input required="" placeholder="Insira o nome do produto" class="form-input" name="nome" id="name" type="text" value="<?= $productsFound->nome ?>">
    </div>

    <div class="form-group">
        <label class="form-label" for="descricao">Descrição do produto:</label>
        <input required="" placeholder="Insira a descrição do produto" class="form-input" name="descricao" id="email" type="text" value="<?= $productsFound->descricao ?>">
    </div>

    <div class="form-group">
        <label class="form-label" for="valor">valor:</label>
        <input required="" placeholder="Insira o valor do produto" class="form-input" maxlength="11" name="valor" type="text" inputmode="numeric" value="<?= $productsFound->valor ?>">
    </div>

    <div class="form-group">
        <label class="form-label" for="imagem">imagem:</label>
        <img src="../assets/images/<?php echo $productsFound->imagem ?>" alt="">
        <input class="form-input" name="imagem" id="senha" type="file">
    </div>

    <!-- Fazer um if que vai verificar o tipo do produto e vai com base nele, cadastrar no campo correto -->

    <div class="form-group">
        <label class="form-label" for="gluten">Tipo do Produto:</label>

        <select name="id_tipoproduto">
            <?php foreach ($kindProducts as $kindProduct) {
                echo "<option selected value='" . $kindProduct->id_tipoproduto . "'>" . $kindProduct->tipoproduto . "</option>";
            } ?>
        </select>
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Contem Gluten:</label>
        <label class="form-label-radio" for="sim">Sim</label> <input checked type="radio" name="gluten" value="S">
        <label class="form-label-radio" for="nao">Não</label> <input type="radio" name="gluten" value="N">
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Sabor:</label>
        <input required="" placeholder="Ex: 4 Leites e chocolate" class="form-input" name="sabor" type="text" value="<?= $productsFound->sabor ?>">
    </div>

    <div class="form-group">
        <label class="form-label" for="amendoim">Contem Amendoim:</label>
        <label class="form-label-radio" for="sim">Sim</label> <input type="radio" name="amendoim" value="S">
        <label class="form-label-radio" for="nao">Não</label> <input checked type="radio" name="amendoim" value="N">
    </div>

    <div class="form-group">
        <label class="form-label" for="ativo">Produto ativo:</label>
        <label class="form-label-radio" for="sim">Sim</label> <input checked type="radio" name="ativo" value="S">
        <label class="form-label-radio" for="nao">Não</label> <input type="radio" name="ativo" value="N">
    </div>
    <div>
        <button class="form-button" type="submit">Cadastrar</button>
        <a class="form-button" href="/administrator/admin">Cadastrar</a>
    </div>
</form>/