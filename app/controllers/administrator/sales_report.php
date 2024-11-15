<?php

use app\models\VendaItens;

$product = new VendaItens;

$produtcs_report = $product->salesReportCake();

$layout_adm->add('sales_report');
