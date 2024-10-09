<table class="table table-striped table-hover">
<thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>

    </tr>
</thead>
<tbody>
    <?php foreach ($type_products as $type_product) :
    ?>
        <tr>
            <td><?= $type_product->id_tipoproduto; ?></td>
            <td><?= $type_product->tipoproduto; ?></td>
            <td>
                <a href="/administrator/type_product_edit?id_tipoproduto=<?= $type_product->id_tipoproduto; ?>" class="btn btn-success">Editar</a>
            </td>
            <td>
                <a href="/type_product_destroy?id_tipoproduto=<?= $type_product->id_tipoproduto; ?>" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>