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

        return $select;
    }
}
