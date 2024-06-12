<?php

use app\models\User;

//Filtro de ID para transformalo em numero inteiro 
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);

$user = new User;
//Função find que procura os dados dentro das tabelas (Para Busca)
$userEncontrado = $user->find('id_usuario', $id_usuario);

$layout->add('user_edit');
