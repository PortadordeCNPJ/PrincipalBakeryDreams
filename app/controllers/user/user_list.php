<?php

use app\models\User;

$user = new User;
// $users = $user->all();

$users = $user->all();

$layout->add('user_list');