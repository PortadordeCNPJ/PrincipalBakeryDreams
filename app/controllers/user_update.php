<?php

use app\models\User;
use app\classes\Validation;

$user = new User;
$validation = new Validation;


$validate = $validation->validate($_POST);

//Carrega dentro da variavel $user que recebe da tabela de users, para dar um Update utilizando a função update
$updated = $user->update($validate,['id' =>$validate->id]);

if($updated) {
    header('location:/');
}
