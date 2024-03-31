<?php 

namespace app\interfaces;

interface CartInterface {
    public function add($product);
    public function remove($product);
    public function quantity($product, $quantity);
    public function clear();
    public function cart();

    //Deixa mais facil para ver quantos produtos de cada produto que tem no carrinho de compras, assim chamando ele.
    public function dump();
}