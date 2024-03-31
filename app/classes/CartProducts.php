<?php 

namespace app\classes;
use app\interfaces\CartInterface;
use app\models\ReadCart;


class CartProducts {

    //função que implementa a variavel do cartInterface. Por conta disso, essa função da acesso a o products da página de produtos
    public function products(CartInterface $cartInterface)
    {
         $productsInCart = $cartInterface->cart();
        //  $productsInDatabase = require_once '../app/helpers/products.php';
         $productsInDatabase = (new ReadCart)->all('tb_products');
         
         //Array vazio onde seram colocados todos os produtos, com nome, preço e etc.
         $products = [];
         $total = 0;

         foreach ($productsInCart as $productId => $quantity) {
            //esses tres pontinhos são usados para poder tornar o Array com itens dentro apenas com indice 0
            $product = [...array_filter($productsInDatabase, fn ($product) => (int)$product->id === $productId)];

            // $product = $productsInDatabase[$productId];
            $products[] = [
                'id' => $productId,
                'product' => $product[0]->name,
                'price' => $product[0]->price,
                'description' => $product[0]->description,
                'image' => $product[0]->image,
                'qty' => $quantity,
                'subtotal' => $quantity * $product[0]->price
            ];
            $total += $quantity * $product[0]->price;
         }
         return [
            'products' => $products,
            'total' => $total
         ];
    }
}
?>