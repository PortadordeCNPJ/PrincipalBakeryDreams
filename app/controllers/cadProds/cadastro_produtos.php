<?php

use app\models\TipoProduto;

$tipoProduto = new TipoProduto;

$tipoProdutos = $tipoProduto->all();

$layout->add('cadastro_produtos');