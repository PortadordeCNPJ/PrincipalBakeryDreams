CREATE TABLE tb_usuarios (
    id_usuario INTEGER PRIMARY KEY AUTO_INCREMENT,
    usr_nome VARCHAR(50) NOT NULL,
    usr_email VARCHAR(50) NOT NULL,
    usr_cpf BIGINT NOT NULL,
    usr_senha VARCHAR(255) NOT NULL,
    idusr_tipo INTEGER
);

CREATE TABLE tb_entregas (
    id_entrega INTEGER PRIMARY KEY AUTO_INCREMENT,
    entrg_data DATE NOT NULL,
    identrg_endereco INTEGER
);

CREATE TABLE tb_produtos (
    id_produto INTEGER PRIMARY KEY,
    nome_prdt VARCHAR(50) NOT NULL,
    valor_prdt DECIMAL NOT NULL
);

INSERT INTO
    `tb_produtos` (`id_produto`, `nome_prdt`, `valor_prdt`)
VALUES
    (1, 'Bolo de Chocolate', 40.00),
    (2, 'Bolo de Morango', 40.00),
    (3, 'Bolo de 4 Leites', 40.00),
    (4, 'Bolo de pote de Chocolate ao Leite', 40.00),
    (5, 'Bolo de pote de Ninho com Nutella', 40.00),
    (6, 'Bolo de pote de Morango', 40.00),
    (7, 'Canudos de doce de leite', 5.00),
    (8, 'Canudos de Ninho com Nutella', 5.00);

CREATE TABLE tb_vndprodutos (
    id_vndproduto INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_vndprdvenda INTEGER,
    id_vndprdproduto INTEGER
);

CREATE TABLE tb_tipos (
    id_tipo INTEGER PRIMARY KEY,
    tp_tipo VARCHAR(50) NOT NULL
);

INSERT INTO
    `tb_tipos` (`id_tipo`, `tp_tipo`)
VALUES
    (1, 'admin'),
    (2, 'vendedor'),
    (3, 'comprador');

CREATE TABLE tb_enderecos (
    id_endereco INTEGER PRIMARY KEY AUTO_INCREMENT,
    end_bairro VARCHAR(50),
    end_numero INTEGER,
    end_referencia VARCHAR(250),
    idend_usuario INTEGER
);

CREATE TABLE tb_vendas (
    id_venda INTEGER PRIMARY KEY AUTO_INCREMENT,
    dtvnd_produto DATE NOT NULL,
    vnd_preco DECIMAL NOT NULL,
    vnd_quantidade INTEGER NOT NULL,
    vnd_prdtotal DECIMAL NOT NULL,
    idvnd_usuario INTEGER
);

ALTER TABLE
    `tb_usuarios`
ADD
    CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`idusr_tipo`) REFERENCES `tb_tipos` (`id_tipo`);

ALTER TABLE
    `tb_entregas`
ADD
    CONSTRAINT `tb_entregas_ibfk_1` FOREIGN KEY (`identrg_endereco`) REFERENCES `tb_enderecos` (`id_endereco`);

ALTER TABLE
    `tb_vndprodutos`
ADD
    CONSTRAINT `tb_vndprodutos_ibfk_1` FOREIGN KEY (`id_vndprdvenda`) REFERENCES `tb_vendas` (`id_venda`),
ADD
    CONSTRAINT `tb_vndprodutos_ibfk_2` FOREIGN KEY (`id_vndprdproduto`) REFERENCES `tb_produtos` (`id_produto`);

ALTER TABLE
    `tb_enderecos`
ADD
    CONSTRAINT `tb_enderecos_ibfk_1` FOREIGN KEY (`idend_usuario`) REFERENCES `tb_usuarios` (`id_usuario`);

ALTER TABLE
    `tb_vendas`
ADD
    CONSTRAINT `tb_vendas_ibfk_1` FOREIGN KEY (`idvnd_usuario`) REFERENCES `tb_usuarios` (`id_usuario`);

--Comando em SQL para puxar informações de outras tabelas em uma especifica:
--SELECT tb_usuarios.*, tb_enderecos.id_endereco,tb_enderecos.end_bairro, tb_enderecos.end_numero, tb_enderecos.end_rua FROM tb_usuarios 
--INNER JOIN tb_enderecos ON tb_usuarios.id_usuario = tb_enderecos.idend_usuario;