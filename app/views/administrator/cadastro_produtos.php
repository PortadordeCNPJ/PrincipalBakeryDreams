<h2>Cadastro de Produtos</h2>

<img class="img-form-1" src="../../assets/img/cake.png">

<form id="form" class="colorful-form" method="post" action="/cadastro_store">

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
        <input  class="form-input" name="imagem" id="senha" type="file">
    </div>

    <!-- Fazer um if que vai verificar o tipo do produto e vai com base nele, cadastrar no campo correto -->

    <div class="form-group">
        <label class="form-label" for="gluten">Tipo do Produto:</label>

        <select name="id_tipoproduto">
                <option selected value="1">Bolo</option>
                <option selected value="2">Salgadinho</option>
                <option selected value="3">Docinho</option>
        </select>
    </div>

    <div class="form-group">
        <label class="form-label mb-3" for="gluten">Contem Gluten:</label>
        <label class="form-label-check" for="sim">Sim</label><input Checked type="checkbox" class="ms-1" name="gluten">
        <label class="form-label-check" for="não">Não</label><input type="checkbox" class="ms-1" name="gluten">
    </div>

    <div class="form-group">
        <label class="form-label" for="gluten">Sabor:</label>
        <input required="" placeholder="Ex: 4 Leites e chocolate" class="form-input" name="gluten" type="text">
    </div>

    <div class="form-group">
        <label class="form-label mb-3" for="gluten">Contem Amendoim:</label>
        <label class="form-label-check" for="sim">Sim</label><input type="checkbox" class="ms-1" name="amendoim">
        <label class="form-label-check" for="não">Não</label><input Checked type="checkbox" class="ms-1" name="amendoim">
    </div>

    <button class="form-button" type="submit">Cadastrar</button>
</form>