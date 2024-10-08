
<h2>Cadastro de Tipo de Produtos</h2>

<img class="img-form-1" src="../../assets/img/cake.png">

<form id="form" class="colorful-form" method="post" action="/type_product_update">

    <div class="form-group">
        <input type="hidden" value="<?= $type_product_found->id_tipoproduto ?>">
        <label class="form-label" for="name">Nome:</label>
        <input required="" placeholder="Insira qual o tipo de produto" class="form-input" name="tipoproduto" type="text" value="<?= $type_product_found->tipoproduto ?>">
    </div>

    <button class="form-button" type="submit">Cadastrar</button>
</form>