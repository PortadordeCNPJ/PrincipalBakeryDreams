<?php
if (empty($_SESSION) or $_SESSION['tipo'] == '' or $_SESSION['tipo'] == 'U') {
    echo "<script>location.href='../pages/page_not_found';</script>";
} else {
?>

    <table>
        <tbody>
            <ul>
                <li><a href="/administrator/user_list">Lista de Usuários</a></li>
                <li><a href="/administrator/cadastro_produtos">Cadastro Produtos</a></li>
            </ul>
        </tbody>
    </table>

<?php } ?>