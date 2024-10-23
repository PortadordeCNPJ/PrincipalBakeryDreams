<?php

use app\models\User;

$user = new User;
// $users = $user->all();

$users = $user->all();

$layout_adm->add('user_list');