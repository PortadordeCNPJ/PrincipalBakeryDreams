<?php 

namespace app\models;

class ReadCart extends Model 
{
    protected $table = 'tb_produtos';
//SELECT tb_produtos.nome, tb_produtos.valor, tb_tipoprodutos.tipoproduto 
//FROM tb_produtos LEFT JOIN tb_tipoprodutos ON tb_tipoprodutos.id_tipoproduto = tb_produtos.id_tipoproduto;

    public function getProduts() {
        $sql = "SELECT {$this->table}.id_produto, {$this->table}.nome, {$this->table}.valor, tb_tipoprodutos.tipoproduto FROM {$this->table} LEFT JOIN tb_tipoprodutos ON tb_tipoprodutos.id_tipoproduto = {$this->table}.id_tipoproduto;";
        //o prepare() é usado para poder substituir o valor que está vindo do sql
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }
}
