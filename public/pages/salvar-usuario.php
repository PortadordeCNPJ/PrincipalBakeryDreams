<?php
error_reporting(E_ALL);

//Request recebendo "acao" que vem da página de cadastro, e cadastrar que esta vindo do hidden, por um input na mesma página.
switch ($_REQUEST["acao"]) {
    case 'cadastrar':

        $usr_nome = $_POST["nome"];
        $usr_email = $_POST["email"];
        $usr_cpf = $_POST["cpf"];
        $usr_senha = md5($_POST["senha"]);


        $sql_usuarios = "INSERT INTO tb_usuarios (usr_nome, usr_email, usr_cpf, usr_senha) VALUES ('{$usr_nome}', '{$usr_email}', '{$usr_cpf}', '{$usr_senha}')";

        $res = $conn->query($sql_usuarios);

        if ($res > 0) {
            echo "<script>alert('Cadastro realizado com sucesso');</script>";
            echo "<script>location.href='?page=login';</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona
            echo "<script>alert('Não foi possível cadastrar o usuário');</script>";
            echo "<script>location.href='?page=cadastro';</script>";
        }

        break;

    case 'editar':
        var_dump($_REQUEST);

        $usr_nome = $_POST["nome"];
        $usr_email = $_POST["email"];
        $usr_cpf = $_POST["cpf"];
        $usr_senha = $_POST["senha"];

        $sql_usuarios = "UPDATE tb_usuarios 
                         SET usr_nome='{$usr_nome}', 
                             usr_nome='{$usr_email}', 
                             usr_cpf='{$usr_cpf}',
                             usr_senha='{$usr_senha}'
                         WHERE                   
                             id_usuario=".$_REQUEST["id_usuario"];

        $res = $conn->query($sql_usuarios);

        if ($res == true) {
            echo "<script>alert('Cadastro realizado com sucesso');</script>";
            echo "<script>location.href='?page=listas-usuarios';</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona
            echo "<script>alert('Não foi possível cadastrar o usuário');</script>";
            echo "<script>location.href='?page=listas-usuarios';</script>";
        }
        break;

    case 'excluir':

        //Pega o ID do usuario cadastrado no banco e o Excuir
        $sql_usuarios = "DELETE FROM tb_usuarios WHERE id_usuario=" . $_REQUEST["id_usuario"];

        //Variavel de resultado, passando pela conecção do arquivo config.php, após isso é feita a execução da query, que é o ($sql)
        $res = $conn->query($sql_usuarios);

        //IF para testar se a variavel de resultado for TRUE, ela retorna uma mensagem em JavaScript de que foi cadastrado e redireciona para a página de listar usuarios. Onde ficara a lista de todos os usuarios cadastrados.
        if ($res == true) {
            echo "<script>alert('Excuido com sucesso');</script>";
            echo "<script>location.href='?page=listas-usuarios';</script>";
        } else {

            //ELSE que retorna um erro em que não foi possivel cadastrar um usuario e redireciona para a pagina de listar usuario
            echo "<script>alert('Não foi possivel cadastrar o usuario');</script>";
            echo "<script>location.href='?page=listas-usuarios';</script>";
        }

    default:
        # código...
        break;
}

