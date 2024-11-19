<?php

use app\models\VendaItens;

$product = new VendaItens;

$produtcs_report = $product->salesReportCake();

$produtcs_value = $product->salesTotalValue();

// $total_value = $produtcs_value->valor_total;

// var_dump($produtcs_report);
// var_dump($produtcs_value);

$layout_adm->add('sales_report');
