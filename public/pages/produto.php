<?php session_start(); ?>
    <pre>
        <span class="titulo"> Bakery Dreans: Seus sonhos doces ao seu alcance! </span>
    </pre>

    <div class="para-la">
        <form id="prod" method="POST" action="">
            <div class="container-card">
                <div class="card">
                    <input type="hidden" id="bolo4Leites" value="3">
                    <img class="img-card" src="./assets/img/boloDe4Leites.jpg">
                    <label for="" >Bolo de 4 Leites</label>
                    <div class="texto-card">
                        <div class="btn" onclick="abaixarKg('4Leites')">-</div>
                        <input class="count" id="cont4Leites" readonly value="0" />
                        <div class="btn" onclick="almentarKg('4Leites')">+</div>
                    </div>
                    <div class="prices">
                        <button type="button" class="form-button" name="cmpBoloDe4Leites" onclick="adicionarAoCarrinho(3)">Mandar ao carrinho</button>
                        <input class="amount" id="preco4leites" readonly value="R$0,00" />
                    </div>
                </div>

                <div class="card">
                    <input type="hidden" id="boloPChocolateAoLeite" value="4">
                    <img class="img-card" src="./assets/img/boloDePChocolateAoLeite.webp">
                    <label for="">Bolo de Pote Chocolate ao Leite</label>
                    <div class="texto-card">
                        <div class="btn" onclick="abaixarKg('pChocolateAoLeite')">-</div>
                        <input class="count" id="contPChocolateAoLeite" readonly value="0" />
                        <div class="btn" onclick="almentarKg('pChocolateAoLeite')">+</div>
                    </div>
                    <div class="prices">
                    <button type="button" class="form-button" name="cmpBoloDe4Leites" onclick="adicionarAoCarrinho(4)">Mandar ao carrinho</button>
                        <input class="amount" id="precoPChocolateAoLeite" readonly value="R$0,00" />
                    </div>
                </div>

                <div class="card">
                    <input type="hidden" id="boloDeMorango" value="2">
                    <img class="img-card" src="./assets/img/boloDeMorango.webp">
                    <label for="">Bolo de Morango</label>
                    <div class="texto-card">
                        <div class="btn" onclick="abaixarKg('boloMorango')">-</div>
                        <input class="count" id="contBoloMorango" readonly value="0" />
                        <div class="btn" onclick="almentarKg('boloMorango')">+</div>
                    </div>
                    <div class="prices">
                    <button type="button" class="form-button" name="cmpBoloDe4Leites" onclick="adicionarAoCarrinho(2)">Mandar ao carrinho</button>
                        <input class="amount" id="precoBoloMorango" readonly value="R$0,00" />
                    </div>
                </div>

                <div class="card">
                    <input type="hidden" id="bolodePNinhoNutella" value="5">
                    <img class="img-card" src="./assets/img/bolodePNinhoNutella.jpg">
                    <label for="">Bolo de Pote Ninho Nutella</label>
                    <div class="texto-card">
                        <div class="btn" onclick="abaixarKg('pNinhoNutella')">-</div>
                        <input class="count" id="contPNinhoNutella" readonly value="0" />
                            <div class="btn" onclick="almentarKg('pNinhoNutella')">+</div>
                    </div>
                    <div class="prices">
                    <button type="button" class="form-button" name="cmpBoloDe4Leites" onclick="adicionarAoCarrinho(5)">Mandar ao carrinho</button>
                        <input class="amount" id="precoPNinhoNutella" readonly value="R$0,00" />
                    </div>
                </div>

                <div class="card">
                    <input type="hidden" id="canudoDoceDeLeite" value="7">
                    <img class="img-card" src="./assets/img/canudoDoceDeLeite.jpg">
                    <label for="">Canudo de Doce de Leite</label>
                    <div class="texto-card">
                        <div class="btn" onclick="abaixarKg('canudoDeLeite')">-</div>
                        <input class="count" id="contCanudoDeLeite" readonly value="0" />
                        <div class="btn" onclick="almentarKg('canudoDeLeite')">+</div>

                    </div>
                    <div class="prices"> 
                    <button type="button" class="form-button" name="cmpBoloDe4Leites" onclick="adicionarAoCarrinho(7)">Mandar ao carrinho</button>
                        <input class="amount" id="precoCanudoDeLeite" readonly value="R$0,00" />
                    </div>
                </div>

                <div class="card">
                    <input type="hidden" id="boloDeChocolate" value="1">
                    <img class="img-card" src="./assets/img/boloDeChocolate.jpg">
                    <label for="">Bolo de Chocolate</label>
                    <div class="texto-card">
                        <div class="btn" onclick="abaixarKg('boloChocolate')">-</div>
                        <input class="count" id="contBoloChocolate" readonly value="0" />
                        <div class="btn" onclick="almentarKg('boloChocolate')">+</div>
                    </div>
                    <div class="prices">
                    <button type="button" class="form-button" name="cmpBoloDe4Leites" onclick="adicionarAoCarrinho(1)">Mandar ao carrinho</button>
                        <input class="amount" id="precoBoloChocolate" readonly value="R$0,00" />
                    </div>
                </div>

                <div class="card">
                    <input type="hidden" id="canudoNinhoNutella" value="8">
                    <img class="img-card" src="./assets/img/canudoNinhoNutella.jpg">
                    <label for="" id="cmpBoloDeMorango2" name="cmpBoloDeMorango2">Canudo De Ninho com Nutella</label>
                    <div class="texto-card">
                        <div class="btn" onclick="abaixarKg('canudoNinhoNut')">-</div>
                        <input class="count" id="contCanudoNinhoNut" readonly value="0" />
                        <div class="btn" onclick="almentarKg('canudoNinhoNut')">+</div>
                    </div>
                    <div class="prices">
                    <button type="button" class="form-button" name="cmpBoloDe4Leites" onclick="adicionarAoCarrinho(8)">Mandar ao carrinho</button>
                        <input class="amount" id="precoCanudoNinhoNut" readonly value="R$0,00" />
                    </div>
                </div>
            </div>
        </form>
    </div>
