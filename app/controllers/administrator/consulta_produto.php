<?php

use app\models\ReadCart;

$produto = new ReadCart;
// $users = $user->all();

$produtos = $produto->getProduts();

$layout_adm->add('consulta_produto');