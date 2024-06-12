CREATE TABLE tb_usuarios (
    id_usuario INTEGER (11) PRIMARY KEY,
    nome VARCHAR (150) NOT NULL,
    cpf VARCHAR (11) NOT NULL,
    fone VARCHAR (30) NOT NULL,
    senha VARCHAR (32) NOT NULL,
    ativo INTEGER (1) NOT NULL,
    email VARCHAR (100) NOT NULL,
    dt_nasc DATE NOT NULL,
    tipo VARCHAR (20) NOT NULL,
    bairro VARCHAR (30) NOT NULL,
    nmcasa INTEGER (8) NOT NULL,
    complemento VARCHAR (100) NOT NULL,
    rua VARCHAR (50) NOT NULL
);
INSERT INTO tb_usuarios(id_usuario, nome, cpf, fone, senha, ativo, email, dt_nasc, tipo, bairro, nmcasa, complemento, rua) 
VALUES (1,'AdminGuiWill', '13423812828', '(45) 99134-7667', 'hgHksdhfi234()$@#', 1, 'webmaster@bakery.com', '2006-09-29' , 'admin', '...', 0000, 'Casa', 'Rua da nossa casa'),
       (2,'Guilherme', '34989387232', '(45) 99134-9887', 'FWR@@#$@#FFwer32345', 1, 'guilherme@gmail.com', '2005-09-29' , 'user', 'Consolata', 1908, 'Casa de esquina', 'Rua das coves'),
       (3,'Willian', '09823948723', '(45) 99134-4444', 'FWR@@#dffpgfdr32345', 1, 'willian@gmail.com', '2004-09-29' , 'user', 'Casca velho', 4910, 'Prédio', 'Rua das Andorinhas');

CREATE TABLE tb_vendas (
    id_venda INTEGER (11) PRIMARY KEY,
    tipovenda VARCHAR (20) NOT NULL,
    dtvenda DATE NOT NULL,
    frmpagamento VARCHAR (20) NOT NULL,
    entregue VARCHAR (32) NOT NULL,
    vlrentrega DECIMAL(5,2) NOT NULL,
    data_entrega DATE NOT NULL,
    dataagendamento DATE NOT NULL,
    entregar DATE DEFAULT NULL,
    retirar DATE DEFAULT NULL,
    id_usuario INTEGER (11)
);

CREATE TABLE tb_vendaitens (
    id_compraiten INTEGER (11) PRIMARY KEY,
    valor DECIMAL (5,2) NOT NULL,
    quantidade INTEGER (4) NOT NULL,
    id_venda INTEGER (11),
    id_produto INTEGER (11)
);

CREATE TABLE tb_tipoprodutos (
    id_tipoproduto INTEGER (11) PRIMARY KEY,
    tipoproduto VARCHAR (30) NOT NULL
);

INSERT INTO tb_tipoprodutos (id_tipoproduto, tipoproduto) VALUES
(1, 'bolo'),
(2, 'salgado'),
(3, 'docinho');

CREATE TABLE tb_produtos (
    id_produto INTEGER (11) PRIMARY KEY,
    nome VARCHAR (150) NOT NULL,
    descricao VARCHAR (300) NOT NULL,
    valor DECIMAL(5,2) NOT NULL,
    imagem VARCHAR (200) NOT NULL,
    sabor VARCHAR (30) NOT NULL,
    gluten VARCHAR (1) DEFAULT NULL,
    amedoim VARCHAR (1) DEFAULT NULL,
    tiposalgado VARCHAR (50) NOT NULL,
    tipodoce VARCHAR (50) NOT NULL,
    id_tipoproduto INTEGER (11)
);

INSERT INTO tb_produtos (id_produto, nome, descricao, valor, imagem, sabor, gluten, amedoim, tiposalgado, tipodoce, id_tipoproduto) VALUES
(1, 'Bolo Chocolate', 'Bolo de chocolate com toque refinado de chocolate importado da América do Norte', 45.60, './assets/images/chocolate.jpg', 'Bolo de Chocolate', NULL, NULL, 's', 's', 1);
 
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