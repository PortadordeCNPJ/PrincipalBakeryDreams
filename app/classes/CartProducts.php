<?php 

namespace app\classes;
use app\interfaces\CartInterface;
use app\models\ReadCart;


class CartProducts {

    //função que implementa a variavel do cartInterface. Por conta disso, essa função da acesso a o products da página de produtos
    public function products(CartInterface $cartInterface)
    {
        //Cria a SESSION do carrinho
         $productsInCart = $cartInterface->cart();

        //  $productsInDatabase = require_once '../app/helpers/products.php';
         $productsInDatabase = (new ReadCart)->all('tb_produtos');
         
         //Array vazio onde seram colocados todos os produtos, com nome, preço e etc.
         $products = [];
         $total = 0;

         foreach ($productsInCart as $productId => $quantity) {
            //esses tres pontinhos são usados para poder tornar o Array com itens dentro apenas com indice 0
            $product = [...array_filter($productsInDatabase, fn ($product) => (int)$product->id_produto === $productId)];

            // $product = $productsInDatabase[$productId];
            //O $product[0] é básicamente o id_produto, por isso sempre é o indice 0, que no caso é o primeiro
            $products[] = [
                'id_produto' => $productId,
                'nome' => $product[0]->nome,
                'descricao' => $product[0]->descricao,
                'valor' => $product[0]->valor,
                'imagem' => $product[0]->imagem,
                'sabor' => $product[0]->sabor,
                'gluten' => $product[0]->gluten,
                'amedoim' => $product[0]->amedoim,
                'id_tipoproduto' => $product[0]->id_tipoproduto,
                'qty' => $quantity,
                'subtotal' => $quantity * $product[0]->valor,
            ];
            $total += $quantity * $product[0]->valor;
         }
         return [
            'products' => $products,
            'total' => $total
         ];
    }
}
