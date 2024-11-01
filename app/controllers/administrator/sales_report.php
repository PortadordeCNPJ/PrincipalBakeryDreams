<?php

use app\models\ReadCart;

$product = new ReadCart;

$produtcsCake = $product->salesReportCake();

$layout_adm->add('sales_report');