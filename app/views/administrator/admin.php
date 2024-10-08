<?php
if (empty($_SESSION) or $_SESSION['tipo'] == '' or $_SESSION['tipo'] == 'U') {
    echo "<script>location.href='../pages/page_not_found';</script>";
} else {
?>

    <div class="btn-administrator">
        <a href="/administrator/user_list">Lista de Usuários</a>
        <a href="/administrator/cadastro_produtos">Cadastro de Produtos</a>
        <a href="/administrator/consulta_produto">Consulta de Produtos</a>
        <a href="/administrator/type_product_create">Cadastrar tipo de Produtos</a>
        <a href="/administrator/type_product_consult">Consultar tipo de Produtos</a>
    </div>

<?php } ?>