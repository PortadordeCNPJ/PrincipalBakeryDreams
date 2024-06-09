/* Logico0506: */

CREATE TABLE tb_usuarios (
    id_usuario INTEGER (11) PRIMARY KEY,
    nome VARCHAR (150),
    cpf INTEGER (11) UNIQUE,
    fone VARCHAR (30),
    senha VARCHAR (32),
    ativo INTEGER (1),
    email VARCHAR (100),
    dt_nasc DATE,
    tipo VARCHAR (20),
    bairro VARCHAR (30),
    nmcasa INTEGER (8),
    complemento VARCHAR (100),
    rua VARCHAR (50)
);

CREATE TABLE tb_vendas (
    id_venda INTEGER (11) PRIMARY KEY,
    tipovenda VARCHAR (20),
    dtvenda DATE,
    frmpagamento VARCHAR (20),
    entregue VARCHAR (32),
    vlrentrega DECIMAL,
    data_entrega DATE,
    dataagendamento DATE,
    entregar DATE,
    retirar DATE,
    id_usuario INTEGER (11)
);

CREATE TABLE tb_vendaitens (
    id_compraiten INTEGER (11) PRIMARY KEY,
    valor DECIMAL,
    quantidade INTEGER (4),
    id_venda INTEGER (11),
    id_produto INTEGER (11)
);

CREATE TABLE tb_tipoprodutos (
    id_tipoproduto INTEGER (11) PRIMARY KEY,
    tipoproduto VARCHAR (30)
);

CREATE TABLE tb_produtos (
    id_produto INTEGER (11) PRIMARY KEY,
    nome VARCHAR (150),
    descricao VARCHAR (300),
    valor DECIMAL,
    imagem VARCHAR (200),
    sabor VARCHAR (30),
    gluten VARCHAR (1),
    amedoim VARCHAR (1),
    tiposalgado VARCHAR (50),
    tipodoce VARCHAR (50),
    id_tipoproduto INTEGER (11)
);
 
ALTER TABLE tb_vendas ADD CONSTRAINT FK_tb_vendas_2
    FOREIGN KEY (id_usuario)
    REFERENCES tb_usuarios (id_usuario)
    ON DELETE RESTRICT;
 
ALTER TABLE tb_vendaitens ADD CONSTRAINT FK_tb_vendaitens_2
    FOREIGN KEY (id_venda)
    REFERENCES tb_vendas (id_venda)
    ON DELETE RESTRICT;
 
ALTER TABLE tb_vendaitens ADD CONSTRAINT FK_tb_vendaitens_3
    FOREIGN KEY (id_produto)
    REFERENCES tb_produtos (id_produto)
    ON DELETE RESTRICT;
 
ALTER TABLE tb_produtos ADD CONSTRAINT FK_tb_produtos_2
    FOREIGN KEY (id_tipoproduto)
    REFERENCES tb_tipoprodutos (id_tipoproduto)
    ON DELETE RESTRICT;