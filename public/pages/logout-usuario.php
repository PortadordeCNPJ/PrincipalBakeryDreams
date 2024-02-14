<?php 
    //Aqui a session é quebrada e é deslogado o usuário da sessão dele
    session_start();
    
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    session_destroy();
    header("Location: ?page=home");
    exit;
?>