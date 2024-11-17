<?php

use app\models\User;

$user = new User;

//Função find que procura os dados dentro das tabelas (Para Busca)
$userEncontrado = $user->find('id_usuario', $_SESSION['id_usuario']);

$layout->add('user/user_edit');