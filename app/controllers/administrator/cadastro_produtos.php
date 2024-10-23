<?php

use app\models\TipoProduto;

$tipoProduto = new TipoProduto;

$tipoProdutos = $tipoProduto->all();

$layout_adm->add('cadastro_produtos');