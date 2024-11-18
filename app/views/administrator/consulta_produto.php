<form action="/search_products" method="POST"><button type="submit">Pesquisar</button>
    <input type="text" placeholder="Filtro" name="filter_products">
</form>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Sabor</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto): ?>
            <!-- Adiciona a classe 'inactive' se o produto estiver inativo -->
            <tr class="<?= $produto->ativo === 'N' ? 'inactive' : '' ?>">
                <td><?= $produto->id_produto; ?></td>
                <td><?= $produto->nome; ?></td>
                <td><?= $produto->valor; ?></td>
                <td><?= $produto->sabor; ?></td>
                <td><?= $produto->tipoproduto; ?></td>

                <td>
                    <a href="/products_edit?id_produto=<?= $produto->id_produto; ?>" class="btn btn-success">Editar</a>
                    <a href="/products_destroy?id_produto=<?= $produto->id_produto; ?>" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>