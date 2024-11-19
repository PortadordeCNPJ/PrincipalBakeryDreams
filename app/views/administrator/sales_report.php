<header class="header-sales">
    <h1>Relatório de Vendas</h1>
</header>

<section class="report-container">
    <div class="summary">
        <h2>Resumo</h2>
        <p>Total de Vendas: <strong>R$ <?php echo $produtcs_value[0]->valor_total_todas_compras; ?></strong></p>
    </div>

    <table class="sales-table">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço Unitário</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($produtcs_report as $produtc_reports) {
            echo "<tr>
                <td>" . $produtc_reports->nome . "</td>
                <td>" . $produtc_reports->quantidade_uni . "</td>
                <td>R$ " . $produtc_reports->valor . "</td>
                <td>R$ " . $produtc_reports->valor_total_uni . "</td>
            </tr>";
        }?>
        </tbody>
    </table>
</section>