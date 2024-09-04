<?php

use app\models\ReadCart;

$produto = new ReadCart;
// $users = $user->all();

$produtos = $produto->getProduts();

$layout->add('administrator/consulta_produto');