<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user) :
        ?>
        <tr>
            <td><?= $user->id; ?></td>
            <td><?= $user->name; ?></td>

            <td>
                <a href="/user_edit?id=<?= $user->id; ?>" class="btn btn-success">Editar</a>
            </td>
            <td>
                <a href="/user_destroy?id=<?= $user->id; ?>" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>