<?php 
    $sql_usuarios =  "SELECT * FROM tb_usuarios WHERE id_usuario=".$_REQUEST["id_usuario"];
    $res = $conn->query($sql_usuarios);
    $row = $res->fetch_object();
?>
<span class="titulo"> Edição de Usuários </span>
<div class="img-forms">
    <img class="img-for" src="./assets/img/cake.png">

    <form id="form" class="colorful-form" method="post" action="?page=salvar-usuario">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_usuario" value="<?php echo $row->id_usuario;  ?>">
        <div class="form-group">
            <label class="form-label" for="name">Name:</label>
            <input required="" placeholder="Insira seu nome" class="form-input" name="nome" id="name" type="text" value="<?php echo $row->usr_nome ?>">
        </div>

        <div class="form-group">
            <label class="form-label" for="email">Email:</label>
            <input required="" placeholder="Insira seu email" class="form-input" name="email" id="email" type="email" value="<?php echo $row->usr_email ?>">
        </div>

        <div class="form-group">
            <label class="form-label" for="name">CPF:</label>
            <input required="" placeholder="Insira seu CPF" class="form-input" maxlength="11" name="cpf" id="CPF" type="number" value="<?php echo $row->usr_cpf ?>">
        </div>

        <div class="form-group">
            <label class="form-label" for="name">Senha:</label>
            <div class="inputwrapper">
                <input required="" placeholder="Senha" class="form-input" name="senha" id="senha" type="password" onchange="password()" >
                <button class="eyebt" type="button" id="eye">
                    <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
                </button>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label" for="name">Confirme sua senha: </label>
            <input required="" placeholder="Confirme sua senha" class="form-input" name="pwd" id="pwd" type="password" onchange="password()">
            <div class="error" id="erro-senha">Senhas não coincidem </div>
        </div>


        <button onclick="logar()" class="form-button" type="submit">Cadastrar</button>
    </form>

</div>

<script src="assets/js/scriptcad.js"></script>