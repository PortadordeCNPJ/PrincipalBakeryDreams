<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Tipo</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($produtos as $produto) :
    ?>
        <tr>
            <td><?= $produto->id_produto; ?></td>
            <td><?= $produto->nome; ?></td>
            <td><?= $produto->valor; ?></td>
            <td><?= $produto->tipoproduto; ?></td>

            <td>
                <a href="/administrator/products_edit?id_produto=<?= $produto->id_produto; ?>" class="btn btn-success">Editar</a>
            </td>
            <td>
                <a href="/products_destroy?id_produto=<?= $produto->id_produto; ?>" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>