<?php

//aqui todas as vezes que a uma sessao é criada, tem que ser usuado a função session_start.
session_start();

//IF para testar se a sessao não for vazia, caso for retorna o usuário para a tela inicial
if (empty($_SESSION)) {
    print "<script>location.href='index.php';</script>";
}
$carrinhoJson = $_SESSION["carrinho"];

$carrinho = json_decode($carrinhoJson );

$InId = "WHERE id_produto IN(";

foreach ($carrinho as $value) {
    $InId .= $value->id . ",";
}
$InId = substr($InId, 0, -1);
$InId .= ")";

$sql_usuarios = "SELECT * FROM tb_usuarios
                 WHERE id_usuario=" . $_SESSION["id_usuario"];

$res = $conn->query($sql_usuarios);

$row_usuarios = $res->fetch_object();

//pega o resultado da tabela de cidades
$sql_produtos = "SELECT * FROM tb_produtos " . $InId;

//resultado da conecção com o sql de cidades
$res_produtos = $conn->query($sql_produtos);

//A variavel $qtd é a quantidade de resultados, então ele ira pegar do resultados o número de linhas $num_rows
$sql_produtos = $res_produtos->num_rows;

?>
<pre>
        <span class="titulo"> CARRINHO </span>
    </pre>

<div class="para-la">
    <form id="prod" method="POST" action="?page=confimar-compra">
        <div class="container-card">
            <div class="card">
                <input type="hidden" id="bolo4Leites" value=">">
                <img class="img-card" src="./assets/img/boloDe4Leites.jpg">
                <label for="">Bolo de 4 Leites</label>
                <div class="texto-card">
                    <?php

                    if ($sql_produtos > 0) {
                        while ($row_produtos = $res_produtos->fetch_object()) {
                            if ($row_produtos->id_produto == $row_produtos->quantidade_prdt) {
                                print "<input class='count' readonly value='" .  $row_produtos->quantidade_prdt . "'>";
                            } else {
                            }
                        }
                    }

                    ?>

                </div>
                <div class="prices">
                    <?php

                    if ($sql_produtos > 0) {
                        while ($row_produtos = $res_produtos->fetch_object()) {
                            if ($row_produtos->id_produto == $row_produtos->id_produto) {
                                print "<input class='amount' id='preco4leites' readonly value='" .  $row_produtos->valor_prdt . "'>";
                            } else {
                            }
                        }
                    }

                    ?>
                    <input class="amount" id="preco4leites" readonly value="R$0,00" />
                </div>
            </div>

            <div class="card">
                    <input type="hidden" id="boloPChocolateAoLeite" value="4">
                    <img class="img-card" src="./assets/img/boloDePChocolateAoLeite.webp">
                    <label for="">Bolo de Pote Chocolate ao Leite</label>
                    <div class="texto-card">
           
                        <input class="count" id="contPChocolateAoLeite" readonly value="0" />
       
                    </div>
                    <div class="prices">
                    
                        <input class="amount" id="precoPChocolateAoLeite" readonly value="R$0,00" />
                    </div>
                </div>
            <div class="card">
                <input type="hidden" id="boloDeMorango" value="2">
                <img class="img-card" src="./assets/img/boloDeMorango.webp">
                <label for="">Bolo de Morango</label>
                <div class="texto-card">
               
                    <input class="count" id="contBoloMorango" readonly value="0" />
              
                </div>
                <div class="prices">
                  
                    <input class="amount" id="precoBoloMorango" readonly value="R$0,00" />
                </div>
            </div>

            <div class="card">
                <input type="hidden" id="bolodePNinhoNutella" value="5">
                <img class="img-card" src="./assets/img/bolodePNinhoNutella.jpg">
                <label for="">Bolo de Pote Ninho Nutella</label>
                <div class="texto-card">
               
                    <input class="count" id="contPNinhoNutella" readonly value="0" />
                   
                </div>
                <div class="prices">
                    
                    <input class="amount" id="precoPNinhoNutella" readonly value="R$0,00" />
                </div>
            </div>

            <div class="card">
                <input type="hidden" id="canudoDoceDeLeite" value="7">
                <img class="img-card" src="./assets/img/canudoDoceDeLeite.jpg">
                <label for="">Canudo de Doce de Leite</label>
                <div class="texto-card">
                  
                    <input class="count" id="contCanudoDeLeite" readonly value="0" />
                  
                </div>
                <div class="prices">
                   
                    <input class="amount" id="precoCanudoDeLeite
                        " readonly value="R$0,00" />
                </div>
            </div>

            <div class="card">
                <input type="hidden" id="boloDeChocolate" value="1">
                <img class="img-card" src="./assets/img/boloDeChocolate.jpg">
                <label for="">Bolo de Chocolate</label>
                <div class="texto-card">

                    <input class="count" id="contBoloChocolate" readonly value="0" />
              
                </div>
                <div class="prices">
                  
                    <input class="amount" id="precoBoloChocolate" readonly value="R$0,00" />
                </div>


            </div>

            <div class="card">
                <input type="hidden" id="canudoNinhoNutella" value="8">
                <img class="img-card" src="./assets/img/canudoNinhoNutella.jpg">
                <label for="" id="cmpBoloDeMorango2" name="cmpBoloDeMorango2">Canudo De Ninho com Nutella</label>
                <div class="texto-card">
                   
                    <input class="count" id="contCanudoNinhoNut" readonly value="0" />
                 
                </div>
                <div class="prices">
                   
                    <input class="amount" id="precoCanudoNinhoNut" readonly value="R$0,00" />
                </div>
            </div>

            <button href="?page=salvar-endereco" class="form-button" type="submit">Confirmar Compra</button>
        </div>
    </form>
</div>