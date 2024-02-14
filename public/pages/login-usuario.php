<?php

//Iniciando uma sessão para login do usuário
session_start();

if (empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))) {
    echo "<script>alert('Usuario ou senha não encontros');</script>";
    echo "<script>location.href='?page=login';</script>";
}

$usr_email = $_POST["email"];
$usr_senha = md5($_POST["senha"]);

$sql_usuarios = "SELECT * FROM tb_usuarios
                      WHERE usr_email = '{$usr_email}'
                      AND usr_senha = '{$usr_senha}'";

$res = $conn->query($sql_usuarios);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if ($qtd > 0) {
    $_SESSION["usr_email"] = $usr_email;
    $_SESSION["usr_senha"] = $usr_senha;
    $_SESSION["id_usuario"] = $row->id_usuario;

    echo "<script>alert('Usuário logado com sucesso!');</script>";
    echo "<script>location.href='?page=home';</script>";
} else {
    echo "<script>alert('Usuários e/ou senha incorreto(s)');</script>";
    echo "<script>location.href='?page=home';</script>";
}
?>