<?php

use app\models\User;

//Filtro de ID para transformalo em numero inteiro 
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$user = new User;
//Função find que procura os dados dentro das tabelas (Para Busca)
$userEncontrado = $user->find('id', $id);

$layout->add('user_edit');
