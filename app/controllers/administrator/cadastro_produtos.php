<?php

use app\models\TipoProduto;

$tipoProduto = new TipoProduto;

$tipoProdutos = $tipoProduto->all();

$layout->add('administrator/cadastro_produtos');