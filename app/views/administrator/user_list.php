<form action="/search_user" method="POST"><button type="submit">Pesquisar</button>
    <input type="text" placeholder="Filtro" name="filter_user">
</form>
<table class="user-table table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Status</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <!-- Verifica se o usuário está inativo e aplica a classe 'inactive' -->
            <tr class="<?= $user->ativo === 'N' ? 'inactive' : '' ?>">
                <td><?= $user->id_usuario ?></td>
                <td><?= $user->nome ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->ativo === 'S' ? 'Ativo' : 'Inativo' ?></td>
                <td>
                    <a href="/user_edit?id_usuario=<?= $user->id_usuario; ?>" class="btn btn-success">Editar</a>
                </td>
                <td>
                    <a href="/user_destroy?id_usuario=<?= $user->id_usuario; ?>" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>