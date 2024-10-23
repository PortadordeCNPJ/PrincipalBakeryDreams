<?php

use app\models\User;

$user = new User;

if (!empty($_POST) && !empty($_POST['filter_user'])) {

    //if(nome... executa com apenas nomes, outro if(id... executa apenas filtro com ids))

    $search_user = $_POST['filter_user'];

    $users = $user->searchUser($search_user);

    $layout->add('administrator/user_list');

} else {
    echo "Nenhum filtro pesquisado";
}




