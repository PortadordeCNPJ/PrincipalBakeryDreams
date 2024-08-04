<?php

use app\models\User;

//Filtro de ID para transformalo em numero inteiro 
$id_usuario = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);

$user = new User;

//Carrega dentro da variavel $user que recebe da tabela de users, para dar um Update utilizando a função update
$user_destroy = $user->delete('id_usuario', $id_usuario);

if($user_destroy) {
    header('location:/');
}
