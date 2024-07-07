<?php

session_start();

if (empty($_SESSION)) {
    echo "<script>location.href='/user_login';</script>";
}

?>

<div class="container">
    <div class="row">
        <?php
        echo "Óla, " . $_SESSION["nome"];
        // echo "<a href='logout.php' class='btn btn-danger'>Sair</a>";
        ?>
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
                        <td><?= $user->email; ?></td>

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