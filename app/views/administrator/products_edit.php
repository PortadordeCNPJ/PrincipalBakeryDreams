<h2>Cadastro de Produtos</h2>

<img class="img-form-1" src="../../assets/img/cake.png">

<form id="form" class="colorful-form" method="post" action="/products_update">
    <input type="hidden" name="id_produto" value="<?= $productsFound->id_produto ?>">

    <div class="form-group">
        <label class="form-label" for="name">Nome:</label>
        <input required placeholder="Insira o nome do produto" class="form-input" name="nome" id="name" type="text" value="<?= $productsFound->nome ?>">
    </div>

    <div class="form-group">
        <label class="form-label" for="descricao">Descrição do produto:</label>
        <input required placeholder="Insira a descrição do produto" class="form-input" name="descricao" id="descricao" type="text" value="<?= $productsFound->descricao ?>">
    </div>

    <div class="form-group">
        <label class="form-label" for="valor">Valor:</label>
        <input required placeholder="Insira o valor do produto" class="form-input" maxlength="11" name="valor" type="text" inputmode="numeric" value="<?= $productsFound->valor ?>">
    </div>

    <div class="form-group">
        <label class="form-label" for="imagem">Imagem:</label>
        <img src="../assets/images/<?= $productsFound->imagem ?>" alt="Imagem do produto" width="300">
        <input class="form-input" name="imagem" id="imagem" type="file">
    </div>

    <div class="form-group">
        <label class="form-label" for="id_tipoproduto">Tipo do Produto:</label>
        <select name="id_tipoproduto">
            <?php foreach ($kindProducts as $kindProduct) {
                echo "<option selected value='" . $kindProduct->id_tipoproduto . "'>" . $kindProduct->tipoproduto . "</option>";
            } ?>
        </select>
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Contém Glúten:</label>
        <label class="form-label-radio" for="gluten-sim">Sim</label>
        <input checked type="radio" id="gluten-sim" name="gluten" value="S">
        <label class="form-label-radio" for="gluten-nao">Não</label>
        <input type="radio" id="gluten-nao" name="gluten" value="N">
    </div>

    <div class="form-group">
        <label class="form-label" for="sabor">Sabor:</label>
        <input required placeholder="Ex: 4 Leites e chocolate" class="form-input" name="sabor" type="text" value="<?= $productsFound->sabor ?>">
    </div>

    <div class="form-group">
        <label class="form-label" for="amendoim">Contém Amendoim:</label>
        <label class="form-label-radio" for="amendoim-sim">Sim</label>
        <input type="radio" id="amendoim-sim" name="amendoim" value="S">
        <label class="form-label-radio" for="amendoim-nao">Não</label>
        <input checked type="radio" id="amendoim-nao" name="amendoim" value="N">
    </div>

    <div class="form-group">
        <label class="form-label" for="ativo">Produto Ativo:</label>
        <label class="form-label-radio" for="ativo-sim">Sim</label>
        <input checked type="radio" id="ativo-sim" name="ativo" value="S">
        <label class="form-label-radio" for="ativo-nao">Não</label>
        <input type="radio" id="ativo-nao" name="ativo" value="N">
    </div>

    <div>
        <button class="form-button" type="submit">Cadastrar</button>
    </div>
</form>
