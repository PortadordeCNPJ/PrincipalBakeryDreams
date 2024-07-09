
<h2>Atualizar User</h2>

<form action="/user_update" method="POST" role="form">

    <div class="form-group">
        <input type="hidden" name="id_usuario" value="<?= $userEncontrado->id_usuario ?>">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="<?= $userEncontrado->nome ?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu email" value="<?= $userEncontrado->email ?>">
    </div>

    <button type="submit" class="btn btn-primary">cadastrar</button>
</form>