<?php

// use app\models\User;

// if (empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))) {
//     print "<script>alert('Usuário e/ou senha vazios');</script>";
//     print "<script>location.href='/';</script>";
// }

// $user = new User;

// $email = $_POST["email"];
// $senha = $_POST["senha"];

// foreach ($user as $row) {
//     if ($row > 0) {
//         $_SESSION["email"] = $row->email;
//         $_SESSION["senha"] = $row->senha;
//         $_SESSION["tipo"] = $row->tipo;
//     } else {
//         print "<script>alert('Usuário e/ou senha incorreto(s)');</script>";
//         print "<script>location.href='/';</script>";
//     }
// }

$layout->add("user_login");

