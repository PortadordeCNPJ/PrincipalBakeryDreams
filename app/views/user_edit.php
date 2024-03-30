
<h2>Atualizar User</h2>

<form action="/user_update" method="POST" role="form">

    <div class="form-group">
        <input type="hidden" name="id" value="<?= $userEncontrado->id ?>">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome" value="<?= $userEncontrado->name ?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu email" value="<?= $userEncontrado->email ?>">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Digite sua senha" value="<?= $userEncontrado->password ?>">
    </div>


    <button type="submit" class="btn btn-primary">cadastrar</button>
</form>