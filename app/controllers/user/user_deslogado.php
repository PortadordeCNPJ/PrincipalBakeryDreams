<?php

//Aqui a session é quebrada e é deslogado o usuário da sessão dele

unset($_SESSION["nome"]);
unset($_SESSION["tipo"]);
session_destroy();
echo "<script>alert('Usuário deslogado!');</script>";
header("location: /");
exit;
