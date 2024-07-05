<div class="container">
    <div class="row">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) :
                ?>
                    <tr>
                        <td><?= $user->id_usuario; ?></td>
                        <td><?= $user->nome; ?></td>

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
    </div>
</div>