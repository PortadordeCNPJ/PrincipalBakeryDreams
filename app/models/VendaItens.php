<?php

namespace app\models;

class VendaItens extends Model
{
    protected $table = 'tb_vendaitens';

    public function salesReportCake()
    {
        $sql = "SELECT 
    tb_vendaitens.id_produto, 
    tb_produtos.nome, 
    SUM(tb_vendaitens.quantidade) AS quantidade_uni, 
    tb_produtos.valor, 
    (SUM(tb_vendaitens.quantidade) * tb_produtos.valor) AS valor_total_uni,
    (SELECT 
        SUM(tb_vendaitens.quantidade * tb_produtos.valor)
     FROM 
        tb_vendaitens
     INNER JOIN 
        tb_produtos ON tb_produtos.id_produto = tb_vendaitens.id_produto
    ) AS valor_total
FROM 
    tb_vendaitens 
INNER JOIN 
    tb_vendas ON tb_vendas.id_venda = tb_vendaitens.id_venda 
INNER JOIN 
    tb_produtos ON tb_produtos.id_produto = tb_vendaitens.id_produto
GROUP BY 
    tb_vendaitens.id_produto, 
    tb_produtos.nome, 
    tb_produtos.valor;
";
        $select = $this->connection->prepare($sql);
        $select->execute();

        return $select;
    }

    public function salesTotalValue()
    {
        $sql = "SELECT SUM(tb_vendaitens.quantidade * tb_produtos.valor) AS valor_total_todas_compras FROM tb_vendaitens INNER JOIN tb_vendas ON tb_vendas.id_venda = tb_vendaitens.id_venda INNER JOIN tb_produtos ON tb_produtos.id_produto = tb_vendaitens.id_produto;";
        $select = $this->connection->prepare($sql);
        $select->execute();

        return $select->fetchAll();
    }

    public function finalizarCompra()
    {
        $sql = "INSERT INTO `tb_vendaitens`(`id_compraitem`, `valor`, `quantidade`, `id_venda`, `id_produto`) VALUES (6, 120.00, 1, 5, 26);";
        $insert = $this->connection->prepare($sql);
        $insert->execute();

        return $insert;
    }

    public function finalizarVenda()
    {
        $sql = "INSERT INTO `tb_vendas`(`id_venda`, `tipovenda`, `dtvenda`, `frmpagamento`, `entregue`, `vlrentrega`, `data_entrega`, `dataagendamento`, `entregar`, `retirar`, `id_usuario`) VALUES (5, 'retirada', '2024-11-19', 'pix', 'não', 0.00, '2024-11-19', NULL, NULL, '2024-11-19', 12);";
        $insert = $this->connection->prepare($sql);
        $insert->execute();

        return $insert;
    }
}
