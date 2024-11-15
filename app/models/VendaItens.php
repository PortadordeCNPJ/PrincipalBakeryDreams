<?php

namespace app\models;

class VendaItens extends Model
{
    protected $table = 'tb_vendaitens';

    public function salesReportCake()
    {
        $sql = "select id_compraitem, {$this->table}.id_produto, tb_produtos.nome, sum(quantidade) as quantidade_uni, tb_produtos.valor, (sum(quantidade) * tb_produtos.valor) as valor_total_uni
                FROM {$this->table} 
                INNER JOIN tb_vendas ON tb_vendas.id_venda = {$this->table}.id_venda 
                INNER JOIN tb_produtos ON tb_produtos.id_produto = {$this->table}.id_produto
                GROUP BY {$this->table}.id_produto, tb_produtos.nome, tb_produtos.valor;";
        $select = $this->connection->prepare($sql);
        $select->execute();

        return $select;
    }
}
